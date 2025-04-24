    <!---------------- Top Section ------------------>
    <?php include 'partials/top.php'; ?>

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
    <!-- About Section -->
    <section id="contact">
        <div class="contact">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title fw-bold mb-3">Contact Us</h2>
                    <p class="fs-5">For any inquiries related to the International Iconic Leadership Award Australia 2025 — including nominations, participation, or sponsorship — feel free to contact our team.</p>
                </div>

                <div class="row">
                    <!-- 1st Column -->
                    <div class="col-md-4 col-12">
                        <h4 style="color: var(--iconic-gold);">Event</h4>
                        <div>
                            <p><strong>International Iconic Leadership Award Australia</strong></p>
                            <p><i class="fas fa-globe"></i> Website: <a href="https://www.iconicawards.au" target="_blank">www.iconicawards.au</a></p>
                            <p><i class="fab fa-facebook"></i> Facebook: <a href="https://www.facebook.com/share/1AMeZ95s2N/?mibextid=wwXIfr" target="_blank">Visit Page</a></p>
                        </div>
                    </div>

                    <!-- 2nd Column -->
                    <div class="col-md-4 col-12">
                        <h4 style="color: var(--iconic-gold);">Organiser</h4>
                        <div>
                            <p><strong>Iconic Trade Australia</strong></p>
                            <p><i class="fas fa-globe"></i> Website: <a href="https://www.iconictrade.au" target="_blank">www.iconictrade.au</a></p>
                            <p><i class="fab fa-facebook"></i> Facebook: <a href="https://www.facebook.com/share/15wB7x3H6X/?mibextid=wwXIfr" target="_blank">Visit Page</a></p>
                        </div>
                    </div>

                    <!-- 3rd Column -->
                    <div class="col-md-4 col-12">
                        <h4 style="color: var(--iconic-gold);"> Office</h4>
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

    <section>
        <div class="container mb-5">
            <h2 class="text-center fw-bold mb-5" style="color: var(--iconic-gold);">Send Us A Message</h2>
            <form class="bg-light p-4 rounded shadow-sm" style="max-width: 700px; margin: auto;">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter your first name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter your last name" required>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
                    </div>
                    <div class="col-12">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea id="message" name="message" class="form-control" rows="5" placeholder="Type your message here..." required></textarea>
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

    <!---------------- Bottom Section ------------------>
    <?php include 'partials/bottom.php'; ?>