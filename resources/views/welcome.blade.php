<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Navbar styles */
        .navbar-brand {
            font-family: 'Pacifico';
            font-size: 2em;
            letter-spacing: 0.4em;
        }

        .navbar-nav .nav-link {
            font-size: 14px !important;
            font-weight: bold !important;
        }

        .navbar {
            padding: 1rem;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link:focus,
        .navbar-nav .nav-link:hover {
            color: #ff7a57 !important;
        }

        .navbar-toggler:focus,
        .navbar-toggler:hover {
            color: #ff7a57 !important;
        }

        html {
            scroll-behavior: smooth;
        }

        /* Add extra padding for sections */
        section {
            padding: 90px 10px;
            position: relative;
        }

        /* Offset sections to account for the fixed navbar */
        section::before {
            content: '';
            display: block;
            height: 80px;
            /* Adjust to match your navbar's height */
            margin-top: -80px;
            /* Adjust to match your navbar's height */
        }

        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.5em;
            }

            .navbar-nav .nav-link {
                font-size: 12px !important;
            }
        }

        .custom-btn-outline {
            color: #ff7a57;
            border: 2px solid #ff7a57;
            border-radius: 50%;
            /* For circular buttons */
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custom-btn-outline:hover {
            background-color: #ff7a57;
            color: #fff;
        }

        .subtitle {
            font-size: 1.2em;
            font-weight: 25px;
            color: #ff7a57;
        }

        .infos {
            margin-top: 200px;
        }

        .subtitle {
            font-size: 1.2em;
            font-weight: 25px;
            color: #ff7a57;
        }

        .title {
            font-size: 3em;
            font-weight: 700;
            color: #333;
        }

        .btn-primary {
            background-color: #ff7a57;
            border-color: #ff7a57;
        }

        .btn-primary:hover {
            background-color: #ff7a57;
            border-color: #ff7a57;
        }

        .btn.rounded {
            border-radius: 50px !important;
        }

        .btn {
            font-size: 14px;
            font-weight: bold;
        }

        .widget {
            position: absolute;
            max-width: 650px;
            width: 95%;
            margin: 0 auto;
            border-radius: 50px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            border: 1px solid #dee2e6;
            padding: 20px 0;
            margin-top: auto;
            z-index: 999;
            background: #fff;
            box-shadow: 0 0 30px rgba(173, 181, 189, 0.4);
            overflow: hidden;
            position: sticky;
        }

        .widget-item {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-flex-basis: 0;
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            text-align: center;
            border-right: 1px solid #dee2e6;
        }

        .profile-img {
            padding: 0.25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            max-width: 100%;
            height: auto;
        }

        .subheading {
            opacity: 0.7;
            font-size: 22px;
        }

        .p {
            font-size: calc(14px +(16 - 14)*((100vw - 320px) /(1200 - 320)));
            margin-bottom: 12px;
            letter-spacing: .6px;
        }

        .name {
            font-size: 2.5em;
            font-weight: 700;
            color: #333;
        }

        .subname {
            font-size: 30px;
            font-weight: 700;
            opacity: 0.8;
        }

        .card-body {
            align-items: center;
            padding: 55px 0;
            box-sizing: border-box;
        }

        .h5 {
            font-size: 1.25rem;
        }

        .service-name {
            opacity: 0.8;
        }

        .card-body:hover {
            background-color: #ff7a57;
            color: #fff;
            transition: 0.3s;
            padding: 55px 0;
        }

        .bg-primary {
            background-color: #ff7a57 !important;
        }

        .progress {
            height: 5px;
            border-radius: 10px;
        }
    </style>

</head>

<body>

    <!-- Navbar -->
    @include('Layout.navbar') 

    <!-- Sections -->
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="infos mb-4 mb-md-0">
                        <h6 class="subtitle">hello,I'm</h6>
                        <h6 class="title">Saugat Danai Sharma</h6>
                        <p class="subheading">Web Developer</p>

                        <div class="buttons pt-3">
                            <button class="btn btn-primary rounded">HIRE ME</button>
                            <button class="btn btn-dark rounded">DOWNLOAD CV</button>
                        </div>

                        <div class="socials mt-4 d-flex gap-2">
                            <a class="btn custom-btn-outline social-item" href="javascript:void(0)">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn custom-btn-outline social-item" href="javascript:void(0)">
                                <i class="fab fa-google"></i>
                            </a>
                            <a class="btn custom-btn-outline social-item" href="javascript:void(0)">
                                <i class="fab fa-github"></i>
                            </a>
                            <a class="btn custom-btn-outline social-item" href="javascript:void(0)">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <dotlottie-player src="https://lottie.host/1bf5dd3b-127a-45b1-8c10-5b6da86ea433/KfxDRFOIl0.lottie"
                        background="transparent" speed="1" style="width: 100%; height: auto;" loop
                        autoplay></dotlottie-player>
                </div>
                <div class="widget mt-4 mt-md-0">
                    <div class="widget-item">
                        <h1>500</h1>
                        <p>Happy Clients</p>
                    </div>
                    <div class="widget-item">
                        <h1>20</h1>
                        <p>Project Completed</p>
                    </div>
                    <div class="widget-item">
                        <h1>60</h1>
                        <p>Award Won</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row text-md-left">
                <div class="col-md-3">
                    <img src="assets/profileImg/profileimg.jpg" alt="About Me" class="profile-img">
                </div>
                <div class="pl-md-4 col-md-9">
                    <h6 class="name">Saugat Danai Sharma</h6>
                    <p class="subheading">Web Developer</p>

                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, pariatur, aperiam aut
                            autem
                            voluptas odit. Odio ducimus delectus totam sed aliquam sequi praesentium mollitia, illum
                            repudiandae quidem quod, magni magnam.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, eius, nam. Quo praesentium
                            qui
                            temporibus voluptatum, facilis aliquid eligendi fugiat beatae neque inventore non. Laborum
                            repellendus consequatur ullam voluptatum asperiores.
                        </p>
                    </div>
                    <div class="buttons pt-3">
                        <button class="btn btn-primary rounded">DOWNLOAD CV</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service">
        <div class="container mb-5">
            <div class="row">
                <div class="col">
                    <h6 class="subheading text-center">Service</h6>
                    <h6 class="subname text-center mb-4">What I Do</h6>
                    <div class="description text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos.
                        </p>
                        <p>
                            rerum commodi corrupti, temporibus non quam.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-code fa-2x mb-2"></i>
                            <h5 class="service-name">Web Development</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-cogs fa-2x mb-2"></i>
                            <h5 class="service-name">DevOps</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-bug fa-2x mb-2"></i>
                            <h5 class="service-name">Bug Bounty</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fas fa-shield-alt fa-2x mb-2"></i>
                            <h5 class="service-name">Security Assessment</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h6 class="subheading text-center">Skills</h6>
            <h6 class="subname text-center mb-4">Why Choose Me</h6>
            <div class="description text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos.
                    <br>
                    rerum commodi corrupti, temporibus non quam.
                </p>
            </div>
            <div class="row text-left">
                <div class="col-sm-6 mt-5">
                    <h6 class="mb-3">Web Development</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 99%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"> </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-5">
                    <h6 class="mb-3">DevOps</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-sm-6 mt-5">
                    <h6 class="mb-3">Bug Bounty</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 77%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-sm-6 mt-5">
                    <h6 class="mb-3">Security Assessment</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <h6 class="subheading text-center">Services</h6>
            <h6 class="subname text-center mb-4">What I do</h6>
            <div class="description text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos.
                </p>
                <p>
                    rerum commodi corrupti, temporibus non quam.
                </p>
            </div>
            <div class="row text-left">
                <div class="col-sm-6 mt-5">
                    <h6 class="mb-3">Web Development</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 99%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"> </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-5">
                    <h6 class="mb-3">DevOps</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-sm-6 mt-5">
                    <h6 class="mb-3">Bug Bounty</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 77%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-sm-6 mt-5">
                    <h6 class="mb-3">Security Assessment</h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
    </section>

    <section id="testimonial">
        <div class="container">
            <h6 class="subheading text-center">Testimonial</h6>
            <h6 class="subname text-center mb-4">What People Say About Me</h6>
            <div class="description text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos.
                    <br>
                    rerum commodi corrupti, temporibus non quam.
                </p>
            </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner justify-content-center">
                    <div class="carousel-item active text-center">
                        <img src="assets/profileimg/profileImg.jpg" class="d-block mx-auto" style="width: 5%;" alt="...">
                        <p>
                            im in love with this template. it's so easy to use and customize. i love the color
                        </p>
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <h1>Blog</h1>
            <p>Read my latest posts.</p>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h1>Contact</h1>
            <p>Get in touch with me.</p>
        </div>
    </section>

    @include('Layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navLinks = document.querySelectorAll(".nav-link");
            const navbarToggler = document.querySelector(".navbar-toggler");
            const navbarCollapse = document.querySelector(".navbar-collapse");

            const setActiveLink = () => {
                const sections = document.querySelectorAll("section");
                let scrollPosition = window.scrollY + window.innerHeight / 2;

                sections.forEach(section => {
                    const id = section.getAttribute("id");
                    const link = document.querySelector(`.nav-link[href="#${id}"]`);
                    if (link) {
                        if (section.offsetTop <= scrollPosition &&
                            section.offsetTop + section.offsetHeight > scrollPosition) {
                            // Remove active class from all links first
                            navLinks.forEach(navLink => navLink.classList.remove("active"));

                            // Add active class only to the current section's link
                            link.classList.add("active");
                        }
                    }
                });
            };

            navLinks.forEach(link => {
                link.addEventListener("click", function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute("href").substring(1);
                    const targetSection = document.getElementById(targetId);

                    if (targetSection) {
                        targetSection.scrollIntoView({
                            behavior: "smooth",
                            block: "start",
                        });

                        // Remove active class from all nav links
                        navLinks.forEach(navLink => navLink.classList.remove("active"));

                        // Add active class to the clicked nav link
                        this.classList.add("active");
                    }

                    // Collapse the navbar after clicking the link
                    if (window.innerWidth < 992) { // Only collapse for smaller screens
                        navbarCollapse.classList.remove("show");
                        navbarToggler.setAttribute("aria-expanded", "false");
                    }
                });
            });

            window.addEventListener("scroll", setActiveLink);
            setActiveLink();
        });
    </script>

    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

</body>

</html>