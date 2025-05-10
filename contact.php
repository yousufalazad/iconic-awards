<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'partials/top.php';

// Autoload Composer dependencies
require 'vendor/autoload.php';

session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$success_message = '';
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check for CSRF token validity
    if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {

        // Define variables
        $first_name = htmlspecialchars(trim($_POST['first_name']));
        $last_name = htmlspecialchars(trim($_POST['last_name']));
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $message = htmlspecialchars(trim($_POST['message']));

        // Honeypot check for spam bots
        $honeypot = trim($_POST['honeypot']);
        if (!empty($honeypot)) {
            exit("Spam detected.");
        }

        // Validation
        if (empty($first_name) || empty($last_name) || empty($email) || empty($message)) {
            $error_message = "All fields are required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_message = "Invalid email address.";
        } else {
            try {
                $mail = new PHPMailer(true);

                // Server settings 

                //$mail->isSMTP();
                //$mail->Host = 'mail.iconicawards.au';
                //$mail->SMTPAuth = true;
                //$mail->Username = 'info@iconicawards.au';
                //$mail->Password = 'Awards75.';
                $mail->isSMTP();
                $mail->Host = 'mail.azoncode.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'billing@azoncode.com';
                $mail->Password = 't&TyByPwNPU9fX92';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SSL for port 465
                $mail->Port = 465;
                $mail->CharSet = 'UTF-8';
                //$mail->SMTPDebug = 2;  // Uncomment for debugging

                // Recipients
                $mail->setFrom('billing@azoncode.com', 'Iconic Awards');
                $mail->addAddress('info@iconicawards.au'); // Receiving email address

                // Content
                $mail->isHTML(false);
                $mail->Subject = "New contact form (iconicawards.au) message from $first_name $last_name";
                $mail->Body    = "You have received a new message from your website contact form.\n\n" .
                    "Name: $first_name $last_name\n" .
                    "Email: $email\n\n" .
                    "Message:\n$message";

                $mail->send();
                $success_message = "Thank you! Your message has been sent successfully.";
            } catch (Exception $e) {
                $error_message = "An error occurred while sending your message. Please try again. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    } else {
        $error_message = "Invalid CSRF token.";
    }
}
?>

<!-- Breadcrumb Section -->
<div class="page_breadcrumb bg-light">
    <div class="container">
        <div class="d-flex flex-column align-items-center py-5">
            <h1 class="fw-bold">Contact us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb d-flex align-items-center mt-3">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Contact Information Section -->
<section id="contact">
    <div class="contact">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fw-bold mb-3">Contact Us</h2>
                <p class="fs-5">For any inquiries related to the International Iconic Leadership Award Australia 2025 — including nominations, participation, or sponsorship — feel free to contact our team.</p>
            </div>

            <div class="row">
                <!-- Event Info -->
                <div class="col-md-4 col-12">
                    <h4 style="color: var(--iconic-gold);">Event</h4>
                    <div>
                        <p><strong>International Iconic Leadership Award Australia</strong></p>
                        <p><i class="fas fa-globe"></i> Website: <a href="https://www.iconicawards.au" target="_blank">www.iconicawards.au</a></p>
                        <p><i class="fab fa-facebook"></i> Facebook: <a href="https://www.facebook.com/share/1AMeZ95s2N/?mibextid=wwXIfr" target="_blank">Visit Page</a></p>
                    </div>
                </div>

                <!-- Organiser Info -->
                <div class="col-md-4 col-12">
                    <h4 style="color: var(--iconic-gold);">Organiser</h4>
                    <div>
                        <p><strong>Iconic Trade Australia</strong></p>
                        <p><i class="fas fa-globe"></i> Website: <a href="https://www.iconictrade.au" target="_blank">www.iconictrade.au</a></p>
                        <p><i class="fab fa-facebook"></i> Facebook: <a href="https://www.facebook.com/share/15wB7x3H6X/?mibextid=wwXIfr" target="_blank">Visit Page</a></p>
                    </div>
                </div>

                <!-- Office Info -->
                <div class="col-md-4 col-12">
                    <h4 style="color: var(--iconic-gold);">Office</h4>
                    <div>
                        <p><strong>Australia Office Representative</strong></p>
                        <p><i class="fas fa-envelope"></i> <a href="mailto:info@iconicawards.au">info@iconicawards.au</a></p>
                        <p><i class="fas fa-phone-square-alt"></i> <a href="tel:+61430912787">+61 430 912 787</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section>
    <div class="container mb-5">
        <h2 class="text-center fw-bold mb-5" style="color: var(--iconic-gold);">Send us a message</h2>

        <div style="max-width: 700px; margin: auto;">
            <?php if (!empty($success_message)): ?>
                <div class="alert alert-success text-center"><?php echo $success_message; ?></div>
            <?php endif; ?>
            <?php if (!empty($error_message)): ?>
                <div class="alert alert-danger text-center"><?php echo $error_message; ?></div>
            <?php endif; ?>
        </div>
        <form action="" method="POST" class="bg-light p-4 rounded shadow-sm" style="max-width: 700px; margin: auto;">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

            <!-- Honeypot -->
            <div style="display:none;">
                <input type="text" name="honeypot" value="">
            </div>

            <div class="row g-3">
                <div class="col-md-6">
                    <label for="first_name" class="form-label" style="color: var(--iconic-gold);">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo htmlspecialchars($_POST['first_name'] ?? ''); ?>" placeholder="Enter your first name" required>
                </div>
                <div class="col-md-6">
                    <label for="last_name" class="form-label" style="color: var(--iconic-gold);">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo htmlspecialchars($_POST['last_name'] ?? ''); ?>" placeholder="Enter your last name" required>
                </div>
                <div class="col-12">
                    <label for="email" class="form-label" style="color: var(--iconic-gold);">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" placeholder="Enter your email address" required>
                </div>
                <div class="col-12">
                    <label for="message" class="form-label" style="color: var(--iconic-gold);">Your Message</label>
                    <textarea id="message" name="message" class="form-control" rows="5" placeholder="Type your message here..." required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary px-4 py-2 mt-3">
                        <i class="fas fa-paper-plane me-2"></i>Send Message
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include 'partials/bottom.php'; ?>