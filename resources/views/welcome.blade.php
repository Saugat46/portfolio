<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    @vite(['resources/css/app.css'])
</head>

<body>

    <!-- Navbar -->
    @include('Layout.navbar') 

    <main id="main">
        @include('section')
    </main>

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