<?php include 'partials/top.php'; ?>

<!-- Breadcrumb Section -->
<div class="page_breadcrumb bg-light">
    <div class="container">
        <div class="d-flex flex-column align-items-center py-5">
            <h1 class="fw-bold">Events Overview</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb d-flex align-items-center mt-3">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events Overview</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<section id="about" class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <!-- About Image -->
            <div class="col-md-6">
                <img src="assets/images/about.jpg" class="img-fluid rounded shadow" alt="About ICONIC AWARDS 2025">
            </div>
            <!-- About Content -->
            <div class="col-md-6">
                <h2 class="fw-bold mb-4">Events Global Growth & Innovation</h2>
                <p class="text-muted">
                    ICONIC AWARDS 2025 is more than a conference; it is a **global movement** bringing together
                    visionaries, policymakers, and industry leaders to shape the future of international
                    trade, sustainable development, and economic collaboration.
                </p>
                <!-- <p class="text-muted">
                        With a strong focus on **innovation, entrepreneurship, and policy transformation**, 
                        ICONIC AWARDS 2025 Australia serves as a dynamic platform where ideas meet action, driving global 
                        progress across industries.
                    </p> -->
                <ul class="list-unstyled">
                    <li><i class="fas fa-check-circle text-success"></i> Engage with world-class speakers</li>
                    <li><i class="fas fa-check-circle text-success"></i> Experience cutting-edge technology & insights</li>
                    <li><i class="fas fa-check-circle text-success"></i> Expand your global business network</li>
                    <li><i class="fas fa-check-circle text-success"></i> Drive economic & social impact</li>
                </ul>
                <a href="contact.php" class="btn btn-primary mt-3">Join the Movement</a>
            </div>
        </div>
    </div>
</section>
<!-- Upcoming Events Section -->
<section id="events" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Upcoming Events</h2>
            <p class="text-muted">Be a part of world-class events that shape the future.</p>
        </div>
        <div class="row g-4">
            <!-- Event 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <img src="assets/images/event-1.jpg" class="card-img-top" alt="Conference">
                    <div class="card-body text-center">
                        <h4 class="fw-bold">Global Policy Conference 2025</h4>
                        <p class="text-muted">Engage in discussions on economic policies and global growth strategies.</p>
                        <!-- <a href="event-details.php?id=1" class="btn btn-outline-primary">Learn More</a> -->
                    </div>
                </div>
            </div>
            <!-- Event 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <img src="assets/images/event-2.jpg" class="card-img-top" alt="Networking">
                    <div class="card-body text-center">
                        <h4 class="fw-bold">Exclusive Networking Session</h4>
                        <p class="text-muted">Meet industry leaders, innovators, and decision-makers.</p>
                        <!-- <a href="event-details.php?id=2" class="btn btn-outline-primary">Learn More</a> -->
                    </div>
                </div>
            </div>
            <!-- Event 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <img src="assets/images/event-3.jpg" class="card-img-top" alt="Innovation Forum">
                    <div class="card-body text-center">
                        <h4 class="fw-bold">Innovation & Sustainability Forum</h4>
                        <p class="text-muted">Explore groundbreaking ideas shaping sustainable futures.</p>
                        <!-- <a href="event-details.php?id=3" class="btn btn-outline-primary">Learn More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section -->
<section class="text-center text-white py-5" style="background: url('assets/images/banner-2.jpg') center/cover;">
    <div class="container">
        <h2 class="fw-bold">Experience the Future of Economic Collaboration</h2>
        <p class="mt-3">Join us at ICONIC AWARDS 2025 for impactful discussions, networking, and innovation.</p>
        <a href="register.php" class="btn btn-primary mt-3">Register Now</a>
    </div>
</section>

<?php include 'partials/bottom.php'; ?>