<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'partials/head.php'; ?>
</head>

<body>
    <!-- Navbar -->
    <?php include 'partials/header.php'; ?>

    <!-- Carousel Slider -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/slider/slider-01.png" class="d-block w-100" alt="Conference">
            </div>
            <div class="carousel-item">
                <img src="assets/images/slider/slider-02.png" class="d-block w-100" alt="Business">
            </div>
            <div class="carousel-item">
                <img src="assets/images/slider/slider-03.png" class="d-block w-100" alt="City">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <!-- About Section -->
    <section id="about" class="section-padding text-center bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-start">
                    <h2 class="fw-bold">ABOUT ICONIC AWARDS 2025</h2>
                    <p class="lead">ICONIC AWARDS 2025 Australia  is a global platform that brings together industry leaders, policymakers, and innovators to discuss sustainable economic growth, investment opportunities, and international trade collaborations.</p>
                    <p>Our mission is to foster economic development through strategic alliances, technology-driven solutions, and policy discussions that shape the future of global trade.</p>
                    <a href="about.php" class="btn btn-sm btn-primary mt-3">Learn More</a>
                </div>
                <div class="col-md-6">
                    <img src="assets/images/about.jpg" class="img-fluid rounded-3 shadow" alt="About APEC">
                </div>
            </div>
        </div>
    </section>

    <!-- Event Section -->
    <section id="event" class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="assets/images/event.jpg" class="img-fluid rounded-3 shadow" alt="Event">
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold">ICONIC AWARDS 2025 EVENT</h2>
                    <p>Join industry leaders, policymakers, and innovators as they discuss the future of economic collaboration and sustainability.</p>
                    <a href="event-overview.php" class="btn btn-sm btn-primary">Explore Events</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Nomination Section -->
    <section id="nomination" class="section-padding bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="fw-bold">Nomination</h2>
                    <p>Recognizing outstanding contributions to economic growth, innovation, and leadership. Submit your nominations now.</p>
                    <a href="nomination.php" class="btn btn-sm btn-primary">Nominate Now</a>
                </div>
                <div class="col-md-6">
                    <img src="assets/images/nomination.jpg" class="img-fluid rounded-3 shadow" alt="Nomination">
                </div>
            </div>
        </div>
    </section>

    <!-- Awards Section -->
    <section id="awards" class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="assets/images/awards.png" class="img-fluid rounded-3 shadow" alt="Awards">
                </div>
                <div class="col-md-6">
                    <h2 class="fw-bold">ICONIC AWARDS 2025</h2>
                    <p>Celebrating excellence and achievements in economic innovation and leadership.</p>
                    <a href="awards.php" class="btn btn-sm btn-primary">View Awards</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Advisor & Judge Panel Section -->
    <section id="advisor-judge-panel" class="panel section-padding bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Heading -->
                <h2 class="fw-bold">Advisor & Judge Panel</h2>
                <!-- Button -->
                <a href="advisor-and-judge-panel.php" class="btn btn-sm btn-primary">View Full Panel</a>
            </div>
            <div class="row mt-5">
                <!-- Nominee Card 1 -->
                <div class="col-md-3">
                    <div class="card shadow d-flex flex-column">
                        <img src="assets/images/demo-profile.jpg" class="card-img-top mt-3" alt="Nominee Image">
                        <div class="card-body text-left d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title">Person 1</h5>
                                <p class="card-text"><i class="fas fa-user-tie"></i> Senior Manager</p>
                                <p class="card-text"><i class="fas fa-phone"></i> +8801681952638</p>
                                <p class="card-text"><i class="fas fa-envelope"></i> person1@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nominee Card 2 -->
                <div class="col-md-3">
                    <div class="card shadow d-flex flex-column">
                        <img src="assets/images/demo-profile.jpg" class="card-img-top mt-3" alt="Nominee Image">
                        <div class="card-body text-left d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title">Person 2</h5>
                                <p class="card-text"><i class="fas fa-user-tie"></i> Project Lead</p>
                                <p class="card-text"><i class="fas fa-phone"></i> +8801681952638</p>
                                <p class="card-text"><i class="fas fa-envelope"></i> person2@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nominee Card 3 -->
                <div class="col-md-3">
                    <div class="card shadow d-flex flex-column">
                        <img src="assets/images/demo-profile.jpg" class="card-img-top mt-3" alt="Nominee Image">
                        <div class="card-body text-left d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title">Person 3</h5>
                                <p class="card-text"><i class="fas fa-user-tie"></i> Marketing Head</p>
                                <p class="card-text"><i class="fas fa-phone"></i> +8801681952638</p>
                                <p class="card-text"><i class="fas fa-envelope"></i> person3@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nominee Card 4 -->
                <div class="col-md-3">
                    <div class="card shadow d-flex flex-column">
                        <img src="assets/images/demo-profile.jpg" class="card-img-top mt-3" alt="Nominee Image">
                        <div class="card-body text-left d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title">Person 4</h5>
                                <p class="card-text"><i class="fas fa-user-tie"></i> HR Manager</p>
                                <p class="card-text"><i class="fas fa-phone"></i> +8801681952638</p>
                                <p class="card-text"><i class="fas fa-envelope"></i> person4@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'partials/footer.php'; ?>
    <?php include 'partials/script.php'; ?>

</body>

</html>