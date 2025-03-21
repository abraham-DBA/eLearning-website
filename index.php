<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udemy</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
</head>

<body>
    navbar code section
    <section class="navbar">
        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand fw-bold">SMARTLEARNHUB</a>
                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" class="navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link me-4">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.php" class="btn btn-primary me-3">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="registration-form.php" class="btn btn-primary">Register</a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
    </section>

    <!-- banner code section  -->
    <section class="banner">
        <div class="container mt-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center ">
                <div class="col-lg-6 col-md-6 p-3 p-lg-5 pt-lg-3 text-center text-md-start">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis">
                        Education that prepares you for whats next.
                    </h1>
                    <p class="lead">
                        Start, switch or advance your career with more than 5,400 courses. Professional certificates,
                        and degrees from world class universities and companies
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start justify-content-center mb-4 mb-lg-3">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Explore
                            Courses</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 p-0 text-center">
                    <img class="img-fluid rounded-3" src="./images/banner.png" alt="Banner">
                </div>
            </div>
        </div>
    </section>
    <!-- 
    <section class="simple-description">
        <div class="container text-center fs-5 mx-5">
            <p>Creating and supporting your educational journey whether navigating challenges or looking for support,
                our caring team offers a safe place and valuable resources</p>
        </div>
    </section> -->

    <section class="cards">
        <div class="container bg-light pb-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Scholarship Opportunities</h5>
                            <p class="card-text">Unlock your potential with diverse financial aid options to support
                                your
                                educational journey and achieve your dreams.</p>
                            <a href="#" class="card-link">More about this</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Online Learning Programs</h5>
                            <p class="card-text">Empower your future with flexible online courses, tailored to fit your
                                schedule and designed for success in today’s landscape.</p>
                            <a href="#" class="card-link">More about this</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">International Certification</h5>
                            <p class="card-text">Achieve global recognition for your skills and knowledge with
                                internationally accredited certification programs</p>
                            <a href="#" class="card-link">More about this</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- heading code here -->
    <section class="heading">
        <div class="p-5 text-center ">
            <div class="container">
                <h1 class="text-body-emphasis fw-bold">Find your perfect program.</h1>
            </div>
        </div>
    </section>

    <!-- buttons for courses  -->
    <section class="buttons">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-auto">
                    <a href="#" class="btn btn-primary active">Data Science</a>
                </div>
                <div class="col-auto">
                    <a href="#" class="btn btn-outline-secondary">Programming</a>
                </div>
                <div class="col-auto">
                    <a href="#" class="btn btn-outline-secondary">Artificial Intelligence</a>
                </div>
                <div class="col-auto">
                    <a href="#" class="btn btn-outline-secondary">Cloud Computing</a>
                </div>
                <div class="col-auto">
                    <a href="#" class="btn btn-outline-secondary">Cybersecurity</a>
                </div>
                <div class="col-auto">
                    <a href="#" class="btn btn-outline-secondary">View All Courses</a>
                </div>
            </div>
        </div>
    </section>

    <section class="courses">
        <div class="container my-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card shadow-lg h-100 hover-effect border-0"
                        onmouseover="this.style.transform='translateX(-5px)'"
                        onmouseout="this.style.transform='translateX(0)'">
                        <img src="./images/100-days-of-code.jpeg" class="card-img-top w-100" alt="Course Image">
                        <div class="card-body">
                            <h5 class="card-title">100 Days of Code: The Complete Python Pro Bootcamp</h5>
                            <div class="d-flex">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" width="20" height="20" alt="Star">
                            </div>
                            <div class="d-flex mt-3">
                                <img src="./icons/people.svg" width="20" height="20" alt="people">
                                <p class="ms-2 mb-0">4,912</p>
                                <img src="./icons/journal-text.svg" width="20" height="20" alt="notes" class="ms-3">
                                <p class="ms-2 mb-0">48 lessons</p>
                            </div>
                            <hr>
                            <a href="#" class="btn btn-primary w-100">UGX 150,000</a>
                        </div>
                    </div>

                </div>

                <!-- Duplicate the structure for each course card -->
                <div class="col">
                    <div class="card shadow-lg h-100 hover-effect border-0"
                        onmouseover="this.style.transform='translateX(-5px)'"
                        onmouseout="this.style.transform='translateX(0)'">
                        <img src="./images/comptia.jpeg" class="card-img-top w-100" alt="Course Image">
                        <div class="card-body">
                            <h5 class="card-title">CompTIA Security+ (SY0-701) Complete Course & Exam</h5>
                            <div class="d-flex">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" width="20" height="20" alt="Star">
                            </div>
                            <div class="d-flex mt-3">
                                <img src="./icons/people.svg" width="20" height="20" alt="people">
                                <p class="ms-2 mb-0">5,112</p>
                                <img src="./icons/journal-text.svg" width="20" height="20" alt="notes" class="ms-3">
                                <p class="ms-2 mb-0">51 lessons</p>
                            </div>
                            <hr>
                            <a href="#" class="btn btn-primary w-100">UGX 150,000</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm h-100 hover-effect border-0"
                        onmouseover="this.style.transform='translateX(-5px)'"
                        onmouseout="this.style.transform='translateX(0)'">
                        <img src="./images/data-structures.jpeg" class="card-img-top w-100" alt="Course Image">
                        <div class="card-body">
                            <h5 class="card-title">Data Structures and Algorithms: In-Depth DSA using Python</h5>
                            <div class="d-flex">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" width="20" height="20" alt="Star">
                            </div>
                            <div class="d-flex mt-3">
                                <img src="./icons/people.svg" width="20" height="20" alt="people">
                                <p class="ms-2 mb-0">4,912</p>
                                <img src="./icons/journal-text.svg" width="20" height="20" alt="notes" class="ms-3">
                                <p class="ms-2 mb-0">22 lessons</p>
                            </div>
                            <hr>
                            <a href="#" class="btn btn-primary w-100">UGX 150,000</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-lg h-100 hover-effect border-0"
                        onmouseover="this.style.transform='translateX(-5px)'"
                        onmouseout="this.style.transform='translateX(0)'">
                        <img src="./images/ai-course.jpeg" class="card-img-top w-100" alt="Course Image">
                        <div class="card-body">
                            <h5 class="card-title">Artificial Intelligence A-Z 2025: Agentic AI, Gen AI, and RL</h5>
                            <div class="d-flex">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" class="me-1" width="20" height="20" alt="Star">
                                <img src="./icons/star-fill.svg" width="20" height="20" alt="Star">
                            </div>
                            <div class="d-flex mt-3">
                                <img src="./icons/people.svg" width="20" height="20" alt="people">
                                <p class="ms-2 mb-0">4,012</p>
                                <img src="./icons/journal-text.svg" width="20" height="20" alt="notes" class="ms-3">
                                <p class="ms-2 mb-0">31 lessons</p>
                            </div>
                            <hr>
                            <a href="#" class="btn btn-primary w-100">UGX 150,000</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <div class="container my-5 bg-light text-dark py-5 rounded-3">


        <div class="row align-items-center p-4">
            <!-- Image Section -->
            <div class="col-lg-5 p-0 overflow-hidden shadow-lg">
                <img class="rounded-3 w-100" src="./images/about.jpg" alt="Hero Image" loading="lazy">
            </div>

            <!-- Text Section -->
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Ways we can help</h1>
                <p class="lead">
                    Our eLearning platform is a dynamic and innovative online education hub designed to
                    meet the needs of students, educators, and lifelong learners. <br>We believe that learning
                    should be accessible to everyone. <br><br>
                    Our platform offers you the tools and resources to propel yourself towards a brighter future. With
                    expert guidane and supportive community.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <a href="#" class="btn btn-primary btn-lg px-4 me-md-2">Explore Courses</a>
                </div>
            </div>
        </div>
    </div>


    <!-- counter section  -->
    <section class="countdown">
        <style>
            .counter-container {
                padding: 50px 0;
            }

            .counter {
                font-size: 40px;
                font-weight: bold;
                color: #007bff;
            }

            .text {
                font-size: 18px;
                color: #555;
            }
        </style>
        </head>

        <body>

            <div class="container text-center counter-container bg-primary">
                <h1 class="fw-bold text-light mb-5">Building a life long learning community</h1>
                <div class="row">
                    <div class="col-md-3">
                        <h2 class="counter text-light" data-target="1500">0</h2>
                        <p class="text-light">Clients</p>
                    </div>
                    <div class="col-md-3">
                        <h2 class="counter text-light" data-target="250">0</h2>
                        <p class="text text-light">Courses</p>
                    </div>
                    <div class="col-md-3">
                        <h2 class="counter text-light" data-target="1200">0</h2>
                        <p class="text text-light">Good Reviews</p>
                    </div>
                    <div class="col-md-3">
                        <h2 class="counter text-light" data-target="1000">0</h2>
                        <p class="text text-light">Issues Solved</p>
                    </div>
                </div>
            </div>

            <script>
                function animateCounter(counterElement) {
                    const target = +counterElement.getAttribute("data-target");
                    let count = 0;
                    const speed = Math.ceil(target / 100); // Adjust speed for smooth animation

                    function updateCounter() {
                        if (count < target) {
                            count += speed;
                            if (count > target) count = target;
                            counterElement.innerText = count;
                            requestAnimationFrame(updateCounter);
                        } else {
                            counterElement.innerText = target;
                        }
                    }

                    updateCounter();
                }

                document.addEventListener("DOMContentLoaded", function () {
                    const counters = document.querySelectorAll(".counter");
                    counters.forEach(counter => {
                        animateCounter(counter);
                    });
                });
            </script>
    </section>

    <!-- team section  -->
    <section class="team">
        <div class="container text-center bg-light my-5 pt-2">
            <h1 class="my-5 fw-bold">Meet Our Experts</h1>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card border-0" style="width: 80;">
                        <img src="./images/man-wearing-round-eyeglasses-casual-t-shirt.jpg" class="card-img-top"
                            alt="Abraham Ezekiel" loading="lazy">
                        <div class="card-body">
                            <h4 class="fw-bold">Abraham Ezekiel</h4>
                            <p class="card-text text-primary fs-5">AI Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0" style="width: 80;">
                        <img src="./images/portrait-delighted-happy-diligent-female-student-with-dark-skin-keeps-hands-crossed-being-confident-passing-exam-successfully.jpg"
                            class="card-img-top" alt="Abraham Ezekiel" loading="lazy">
                        <div class="card-body">
                            <h4 class="fw-bold">Susan Juliet</h4>
                            <p class="card-text text-primary fs-5">UI Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0" style="width: 80;">
                        <img src="./images/happy-elegant-joyful-guy-grey-jacket-shirt-wears-glasses-gray.jpg"
                            class="card-img-top" alt="Abraham Ezekiel" loading="lazy">
                        <div class="card-body">
                            <h4 class="fw-bold">Isaac John</h4>
                            <p class="card-text text-primary fs-5">BackEnd Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0" style="width: 80;">
                        <img src="./images/close-up-smiley-woman-library.jpg" class="card-img-top" alt="Abraham Ezekiel"
                            loading="lazy">
                        <div class="card-body">
                            <h4 class="fw-bold">Elizabeth Keen</h4>
                            <p class="card-text text-primary fs-5">Data Analyst</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0" style="width: 80;">
                        <img src="./images/content-indian-ceo-standing-smiling-portrait-successful-pensive-bearded-businessman-glasses-posing-office-room-business-expression-management-concept.jpg"
                            class="card-img-top" alt="Abraham Ezekiel" loading="lazy">
                        <div class="card-body">
                            <h4 class="fw-bold">Weiregi Mike</h4>
                            <p class="card-text text-primary fs-5">Database Administrator</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0" style="width: 80;">
                        <img src="./images/horizontal-shot-satisfied-college-student-uses-new-cool-app-cell-phone-carries-notepad-writing-notes-wears-spectacles-silk-scarf-knitted-sweater-isolated-blue-wall.jpg"
                            class="card-img-top" alt="Abraham Ezekiel" loading="lazy">
                        <div class="card-body">
                            <h4 class="fw-bold">Adel Sarie</h4>
                            <p class="card-text text-primary fs-5">Cyber Security</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- testimonial section  -->
    <section class="testimonial">
        <div class="container mt-2 bg-light" style="padding-top: 80px; padding-bottom: 80px;">
            <h1 class="text-center fw-bold mb-4">What our students say</h1>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial text-center">
                            <img src="./images/human-face-expressions-emotions-feelings-portrait-joyful-african-employee-smiling-with-his-white-teeth-happy-with-big-promotion-career-growth-success-achievements.jpg"
                                class="rounded-circle mb-4" width="120" height="120" alt="Profile Image" loading="lazy">
                            <p class="text-center w-75 mx-auto lead">"Taking this course was one of the best decisions
                                I’ve
                                made!
                                The
                                content was
                                well-structured, easy to follow, and packed with practical knowledge. The instructor
                                explained concepts clearly, making even complex topics simple to understand. The
                                hands-on exercises and real-world examples helped me apply what I learned immediately. I
                                now feel more confident in my skills and ready to take on new challenges. I highly
                                recommend this course to anyone looking to expand their knowledge in this field!"</p>
                            <h5>- John Doe</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial text-center">
                            <img src="./images/ai-generated-8569065_1280.jpg" class="rounded-circle mb-4" width="120"
                                height="120" alt="Profile Image" loading="lazy">
                            <p class="text-center w-75 mx-auto lead">"An outstanding course! The material was presented
                                in a
                                logical and engaging way, making
                                learning both enjoyable and effective. The real-world examples and practical exercises
                                made a huge difference in understanding the concepts. I feel much more prepared and
                                confident in using these skills in real scenarios. I highly recommend this course to
                                anyone looking to grow in this field!"</p>
                            <h5>- Jane Smith</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial text-center">
                            <img src="./images/african-teenage-girl-portrait-happy-smiling-face.jpg"
                                class="rounded-circle mb-4" width="120" height="120" alt="Profile Image" loading="lazy">
                            <p class="text-center w-75 mx-auto lead">"This course was exactly what I needed! The lessons
                                were
                                well-structured, and the
                                explanations were clear and easy to follow. The instructor’s teaching style made complex
                                concepts feel simple, and the hands-on exercises helped reinforce my learning. I now
                                feel much more confident in applying what I’ve learned. I would highly recommend this
                                course to anyone looking to improve their skills!"</p>
                            <h5>- Robert Johnson</h5>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- subscribe section -->
    <section class="subscribe">
        <!--Newsletter -->
        <div class="container mt-5">
            <div class="col-lg-4 col-md-12 text-center text-md-start mx-auto">
                <h5 class="fw-semibold">Stay Updated</h5>
                <p class="text-secondary">Subscribe to our email list and get updates from experts.</p>
                <form class="d-flex flex-column flex-sm-row gap-2">
                    <input type="email" class="form-control w-100" placeholder="Email address">
                    <button class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>

    </section>

    <!-- footer section here  -->
    <div class="container-fluid bg-light text-dark py-5 mt-5 w-100">
        <footer class="container-fluid px-5">
            <div class="row gy-4 justify-content-between">
                <!-- Brand and Description -->
                <div class="col-lg-4 col-md-6 col-12 text-center text-md-start">
                    <a href="#" class="navbar-brand fw-bold fs-4 text-primary">SMARTLEARNHUB</a>
                    <p class="text-secondary mt-2">
                        Start, switch, or advance your career with over 5,400 courses, professional certificates,
                        and degrees from world-class universities and companies.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class=" col-lg-2 col-md-3 col-12">
                    <h5 class="fw-semibold mb-3">Explore</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Courses</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-secondary">About</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 col-md-3 col-12">
                    <h5 class="fw-semibold mb-3">Contact Us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2 d-flex align-items-center mb-3">
                            <img src="./icons/geo-alt-fill (1).svg" width="30" alt="Location" class="me-2">
                            <span class="text-secondary">MUBS Nakawa, Old Port Bell Road</span>
                        </li>
                        <li class="nav-item mb-2 d-flex align-items-center mb-4">
                            <img src="./icons/envelope-check-fill.svg" alt="Email" width="25" class="me-2">
                            <a href="mailto:info@smartlearnhub.com"
                                class="text-secondary text-decoration-none">info@smartlearnhub.com</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <img src="./icons/telephone-outbound-fill.svg" width="25" alt="Phone" class="me-2"
                                width="16">
                            <a href="tel:+256752199564" class="text-secondary text-decoration-none">+256-752-199-564</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright & Social Links -->
            <div
                class="d-flex flex-column flex-sm-row justify-content-between align-items-center py-4 mt-4 border-top text-center text-sm-start">
                <p class="mb-0 text-secondary">© 2025 SMARTLEARNHUB. All rights reserved.</p>
                <ul class="list-unstyled d-flex gap-3 mt-3 mt-sm-0">
                    <li><a href="#" class="text-dark"><img src="./icons/twitter-x (1).svg" alt=""></a></li>
                    <li><a href="#" class="text-dark"><img src="icons/instagram.svg" alt=""></a></li>
                    <li><a href="#" class="text-dark"><img src="icons/facebook (1).svg" alt=""></a></li>
                </ul>
            </div>
        </footer>
    </div>


</body>

</html>