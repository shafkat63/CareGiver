<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subarta - Helping the Vulnerable and Overcoming Crises</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Subarta</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#facilities">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#partners">Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-outline-light" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Subarta Trust</h1>
        <p>Dedicated to serving vulnerable citizens. Helping them overcome life's challenges with care and compassion.
        </p>
        <a href="/services" class="btn btn-primary btn-lg">Learn More</a>
    </div>

    <!-- Main Section -->
    <div id="services" class="container section">
        <h2 class="d-flex justify-content-center mb-4 gap-2"><i class="fas fa-hand-holding-heart section-icon"></i> Our
            Services</h2>
        <div class="row gap-4 d-flex justify-content-center">
            <div class="col-md-3 service-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-home section-icon"></i> Welfare Housing</h5>
                        <p class="card-text">We provide secure housing for the vulnerable, ensuring a safe living
                            environment.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 service-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-brain section-icon"></i> Mental Support</h5>
                        <p class="card-text">Our team offers recreation and mental support for those in need of care.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 service-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-briefcase-medical section-icon"></i> Food & Medical Care
                        </h5>
                        <p class="card-text">We ensure access to essential food, medical care, and related services.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 service-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user-check section-icon"></i> Social and Physical
                            Assessments</h5>
                        <p class="card-text">Comprehensive evaluations to meet individual needs.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 service-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-ambulance section-icon"></i> Emergency Assistance</h5>
                        <p class="card-text">Immediate support in case of emergencies.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 service-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-stethoscope section-icon"></i> Medical Facilities</h5>
                        <p class="card-text">Health check-ups and access to medical services.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 service-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-bus section-icon"></i> Transportation Assistance</h5>
                        <p class="card-text">Driving facilities and transportation support.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 service-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-hand-holding-usd section-icon"></i> Financial Assistance
                        </h5>
                        <p class="card-text">Comprehensive financial support services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Signature Projects Section -->
    <div class="container section" id="projects">
        <h2 class="d-flex justify-content-center mb-4">
            <i class="fas fa-project-diagram section-icon"></i> Signature Projects
        </h2>
        <p class="text-center">Subarta is committed to providing quality care for vulnerable citizens. Our Care
            Management Framework ensures high-quality and cost-effective care for people from various socioeconomic
            backgrounds.</p>

        <!-- Row for Images with hover effect and captions -->
        <div class="row mt-5 my-4">
            <div class="col-md-4 text-center">
                <div class="project-card">
                    <img src="{{ asset('assets/img/sp/sp1.jpeg') }}" class="img-fluid project-img shadow"
                        alt="Signature Project 1">
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="project-card">
                    <img src="{{ asset('assets/img/sp/sp2.jpg') }}" class="img-fluid project-img shadow"
                        alt="Signature Project 2">
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="project-card">
                    <img src="{{ asset('assets/img/sp/sp3.png') }}" class="img-fluid project-img shadow"
                        alt="Signature Project 3">
                </div>
            </div>
        </div>
    </div>






    <div class="container section" id="facilities">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="d-flex justify-content-center mb-4 gap-2"><i
                        class="fas fa-hand-holding-heart section-icon"></i> FACILITIES</h2>

                <hr class="mx-auto" style="border-color:#000000; width:100%; max-width:170px; height: 1px;">
            </div>
        </div>

        <div class="row text-center my-4">
            <!-- Fresh Farming -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 h-100 shadow-sm">
                    <div class="card-body">
                        <div class="icon mb-3"
                            style="background-color: rgba(255,235,59,0.58); width: 80px; height: 80px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%;">
                            <i class="fas fa-apple-alt text-success " style="font-size: 40px;"></i>
                        </div>
                        <h2 class="h5 mt-3">Fresh Farming</h2>
                        <p>We provide our members with residue-free, fresh agricultural products to ensure their good
                            health.</p>
                    </div>
                </div>
            </div>

            <!-- Beautiful Gardening -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 h-100 shadow-sm">
                    <div class="card-body">
                        <div class="icon mb-3"
                            style="background-color: rgba(255,235,59,0.58); width: 80px; height: 80px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%;">
                            <i class="fas fa-seedling text-success" style="font-size: 40px;"></i>
                        </div>
                        <h2 class="h5 mt-3">Beautiful Gardening</h2>
                        <p>You deserve care! Your lawn and yard should look great. We offer professional, fast, clean,
                            beautiful work.</p>
                    </div>
                </div>
            </div>

            <!-- Medical & Treatment -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 h-100 shadow-sm">
                    <div class="card-body">
                        <div class="icon mb-3"
                            style="background-color: rgba(255,235,59,0.58); width: 80px; height: 80px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%;">
                            <i class="fas fa-ambulance text-success" style="font-size: 40px;"></i>
                        </div>
                        <h2 class="h5 mt-3">Medical & Treatment</h2>
                        <p>Our centers offer expert doctors’ advice, a thriving mood-enhancing ambiance, and a range of
                            holistic health services.</p>
                    </div>
                </div>
            </div>

            <!-- Special Care -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 h-100 shadow-sm">
                    <div class="card-body">
                        <div class="icon mb-3"
                            style="background-color: rgba(255,235,59,0.58); width: 80px; height: 80px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%;">
                            <i class="fas fa-user-nurse text-success" style="font-size: 40px;"></i>
                        </div>
                        <h2 class="h5 mt-3">Special Care</h2>
                        <p>We specialize in geriatric care and physical and mental health issues, aiming to create a
                            support model for changing health and socioeconomic situations.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center my-4">
            <!-- Co-creation -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 h-100 shadow-sm">
                    <div class="card-body">
                        <div class="icon mb-3"
                            style="background-color: rgba(255,235,59,0.58); width: 80px; height: 80px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%;">
                            <i class="fas fa-seedling text-success" style="font-size: 40px;"></i>
                        </div>
                        <h2 class="h5 mt-3">Co-creation</h2>
                        <p>Join the Uplift movement. We provide rewarding opportunities for health and well-being
                            through co-creation.</p>
                    </div>
                </div>
            </div>

            <!-- Special Variety Housing -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 h-100 shadow-sm">
                    <div class="card-body">
                        <div class="icon mb-3"
                            style="background-color: rgba(255,235,59,0.58); width: 80px; height: 80px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%;">
                            <i class="fas fa-warehouse text-success" style="font-size: 40px;"></i>
                        </div>
                        <h2 class="h5 mt-3">Special Variety Housing</h2>
                        <p>Subarta designs housing ideas for people with diverse financial situations in urban and rural
                            areas.</p>
                    </div>
                </div>
            </div>

            <!-- Shelter Home -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 h-100 shadow-sm">
                    <div class="card-body">
                        <div class="icon mb-3"
                            style="background-color: rgba(255,235,59,0.58); width: 80px; height: 80px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%;">
                            <i class="fas fa-home text-success" style="font-size: 40px;"></i>
                        </div>
                        <h2 class="h5 mt-3">Shelter Home</h2>
                        <p>Shelter Home provides a safe, secure place for children, teenagers, and women to live and
                            establish their own life.</p>
                    </div>
                </div>
            </div>

            <!-- Partnership -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 h-100 shadow-sm">
                    <div class="card-body text-center">
                        <div class="icon mb-3"
                            style="background-color: rgba(255,235,59,0.58); width: 80px; height: 80px; display: inline-flex; justify-content: center; align-items: center; border-radius: 50%;">
                            <i class="fas fa-handshake text-success" style="font-size: 40px;"></i>
                        </div>
                        <h2 class="h5 mt-3">Partnership</h2>
                        <p>We focus on partnerships with local authorities and companies to offer long-term employment
                            opportunities.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <!-- Testimonials Section -->
    {{-- <div id="testimonials" class="container section">
        <h2><i class="fas fa-comments section-icon"></i>Testimonials</h2>
        <div class="testimonial-card">
            <p><i class="fas fa-user"></i> Mahmuda Haque: "The care and attention I received from Subarta have truly
                changed my life for the better."</p>
        </div>
        <div class="testimonial-card">
            <p><i class="fas fa-user"></i> Rijoyana Khan: "Subarta's dedication to supporting vulnerable individuals is
                unparalleled."</p>
        </div>
        <div class="testimonial-card">
            <p><i class="fas fa-user"></i> Tashlima Kabir: "I am grateful for the warmth and compassion I experienced at
                Subarta."</p>
        </div>
    </div> --}}

    <div id="testimonials" class="container section">
        <h2 class="text-center"><i class="fas fa-comments section-icon"></i> Testimonials</h2>
        <div class="row justify-content-center gap-4">
            <div class="col-lg-3 col-md-6 testimonial-card">
                <div class="card shadow-sm border-0 hover-shadow">
                    <div class="card-body">
                        <p class="card-text">
                            <i class="fas fa-user-circle"></i>
                            <strong>Mahmuda Haque</strong>:
                            "The care and attention I received from Subarta have truly changed my life for the better."
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 testimonial-card">
                <div class="card shadow-sm border-0 hover-shadow">
                    <div class="card-body">
                        <p class="card-text">
                            <i class="fas fa-user-circle"></i>
                            <strong>Rijoyana Khan</strong>:
                            "Subarta's dedication to supporting vulnerable individuals is unparalleled."
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 testimonial-card">
                <div class="card shadow-sm border-0 hover-shadow">
                    <div class="card-body">
                        <p class="card-text">
                            <i class="fas fa-user-circle"></i>
                            <strong>Tashlima Kabir</strong>:
                            "I am grateful for the warmth and compassion I experienced at Subarta."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container section" id="partners">
        <h2 class="d-flex justify-content-center gap-3"><i class="fas fa-handshake section-icon "></i> Partners</h2>
        <div class="row d-flex justify-content-center gap-4">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 h-100 shadow-sm text-center hover-effect">
                    <div class="card-body">
                        <i class="fas fa-hospital fa-3x mb-3 section-icon"></i>
                        <h5 class="card-title">Bangladesh Specialized Hospital Ltd. (BSH)</h5>
                        <p class="card-text">Leading healthcare services in Bangladesh.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 h-100 shadow-sm text-center hover-effect">
                    <div class="card-body">
                        <i class="fas fa-university fa-3x mb-3 section-icon"></i>
                        <h5 class="card-title">Brac University</h5>
                        <p class="card-text">A premier university for higher education.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 h-100 shadow-sm text-center hover-effect">
                    <div class="card-body">
                        <i class="fas fa-briefcase-medical fa-3x mb-3 section-icon"></i>
                        <h5 class="card-title">Enam Medical College & Hospital</h5>
                        <p class="card-text">Dedicated to providing quality medical education.</p>
                    </div>
                </div>
            </div>
            <!-- Add more partners as needed -->
        </div>
    </div>





    <!-- Contact Information Section -->
    <div class="container section" id="contact">
        <h2 class="text-center"><i class="fas fa-envelope section-icon"></i> Contact Us</h2>
        <p class="text-center">Have questions or need assistance? Reach out to us:</p>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-map-marker-alt"></i> Address</h5>
                        <p class="card-text">15 Holy Lane, Shyamoli, Dhaka - 1207</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-phone-alt"></i> Phone</h5>
                        <p class="card-text">02-48119918 | 01985 202010</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-envelope"></i> Email</h5>
                        <p class="card-text">
                            <a href="mailto:info@subarta.org">info@subarta.org</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-globe"></i> Website</h5>
                        <p class="card-text">
                            <a href="http://www.subarta.org" target="_blank">www.subarta.org</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Subarta. All rights reserved.</p>
    </footer>

    <!-- Bootstrap 5 JS (for modals, etc.) -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


</body>

</html>