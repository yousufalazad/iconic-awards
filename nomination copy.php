<?php include 'partials/top.php'; ?>

<!-- Breadcrumb Section -->
<div class="page_breadcrumb bg-light">
    <div class="container">
        <div class="d-flex flex-column align-items-center py-5">
            <h1 class="fw-bold">Nomination</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb d-flex align-items-center mt-3">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nomination</li>
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
                <h2 class="fw-bold mb-4">Nomination Global Growth & Innovation</h2>
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
                <a href="contact.php" class="btn btn-primary mt-3">Join the Nominate</a>
            </div>
        </div>
    </div>
</section>

<!-- Nomination Details Section -->
<section id="nomination" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Why Nominate?</h2>
            <p class="text-muted">Honoring the achievements of individuals who contribute to economic growth and innovation.</p>
        </div>
        <div class="row g-4">
            <!-- Category 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <img src="assets/images/nomination-1.jpg" class="card-img-top" alt="Leadership Excellence">
                    <div class="card-body text-center">
                        <h4 class="fw-bold">Leadership Excellence</h4>
                        <p class="text-muted">Recognizing visionary leaders driving impact in their industries.</p>
                    </div>
                </div>
            </div>
            <!-- Category 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <img src="assets/images/nomination-1.jpg" class="card-img-top" alt="Innovation Award">
                    <div class="card-body text-center">
                        <h4 class="fw-bold">Innovation & Technology</h4>
                        <p class="text-muted">Honoring breakthroughs that shape the future of business and society.</p>
                    </div>
                </div>
            </div>
            <!-- Category 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <img src="assets/images/nomination-1.jpg" class="card-img-top" alt="Sustainability Award">
                    <div class="card-body text-center">
                        <h4 class="fw-bold">Sustainability & CSR</h4>
                        <p class="text-muted">Recognizing efforts in environmental and social responsibility.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero Section -->
<section class="text-center text-white py-5" style="background: url('assets/images/banner-1.jpg') center/cover;">
    <div class="container">
        <h2 class="fw-bold">Submit Your Nomination Today!</h2>
        <p class="mt-3">Be part of a prestigious recognition platform.</p>
        <a href="nominate.php" class="btn btn-primary mt-3">Nominate Now</a>
    </div>
</section>

<?php include 'partials/bottom.php'; ?>