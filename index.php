<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lumen Dental Care</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- HEADER -->
    <header class="header">

        <!-- LEFT SIDE: LOGO + NAME -->
        <div class="header-left">
            <img src="logo2.jpg" alt="Clinic Logo" class="logo">
            <h1 class="clinic-name">Lumen Dental Care</h1>
        </div>

        <!-- MIDDLE BUTTON -->
        <button class="open-btn" onclick="checkOpen()">Are we open?</button>

        <!-- RIGHT SIDE HOURS -->
        <div class="hours-text">
            Open from <strong>Thursday</strong><br>
            until <strong>Tuesday</strong><br>
            time: <strong>10am - 2pm , 4pm - 10pm</strong>
        </div>

    </header>

    <div class="black-trim"></div>

    <!--  IMAGE SLIDER  -->
    <div class="slider-container">
        <div class="slider-track" id="sliderTrack">
            <img src="slide1.png" class="slide-img" alt="Slide 1">
            <img src="slide2.png" class="slide-img" alt="Slide 2">
            <img src="slide3.png" class="slide-img" alt="Slide 3">
            <img src="slide4.png" class="slide-img" alt="Slide 4">
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <main>

        <!-- SECTION 1 -->
        <section class="content-section slide-in-left">
            <img src="img1.png" class="section-img left-img" alt="Dental Care">
            <div class="section-text">
                <h2>Professional Dental Care</h2>
                <p>
                    We provide world-class dental care with modern technology and
                    highly trained specialists to give you the perfect smile.
                </p>
            </div>
        </section>

        <!-- SECTION 2 -->
        <section class="content-section slide-in-right">
            <img src="img2.png" class="section-img right-img" alt="Cosmetic Dentistry">
            <div class="section-text">
                <h2>Cosmetic Dentistry</h2>
                <p>
                    From teeth whitening to veneers, our cosmetic services will help
                    you achieve the smile you've always dreamed of.
                </p>
            </div>
        </section>

        <!-- SECTION 3 -->
        <section class="content-section slide-in-left">
            <img src="img3.png" class="section-img left-img" alt="Orthodontics">
            <div class="section-text">
                <h2>Advanced Orthodontics</h2>
                <p>
                    We offer braces, aligners, and advanced orthodontic solutions
                    tailored to each patient's needs.
                </p>
            </div>
        </section>

        <!-- DOCTOR SECTION -->
        <section class="content-section slide-in-left doctor-section">
            <img src="doctor.png" alt="Dr. John Doe" class="section-img left-img">
            <div class="section-text">
                <h2>Meet The Dentist</h2>
                <p>
                    Dr. John Doe has over 15 years of experience in dental care, specializing in cosmetic and restorative dentistry.
                    He is committed to providing pain-free, personalized treatment to every patient.
                </p>
                <p>
                    With a passion for innovation and patient comfort, Dr. Doe ensures every visit is a positive and confident experience.
                </p>
            </div>
        </section>


        <!-- FEATURES LIST -->
        <section class="features">
            <h2>Why Choose Us?</h2>
            <ul class="feature-list">
                <li>Modern equipment & digital imaging</li>
                <li>Pain-free treatment techniques</li>
                <li>Experienced & friendly dental team</li>
                <li>Affordable pricing & flexible payment plans</li>
                <li>24/7 emergency dental services</li>
            </ul>
        </section>

    </main>
    <div class='sk-ww-google-reviews' data-embed-id='25628334'></div>
    <script src='https://widgets.sociablekit.com/google-reviews/widget.js' defer></script>
    <!-- <div class='sk-ww-facebook-reels' data-embed-id='25628392'></div>
    <script src='https://widgets.sociablekit.com/facebook-reels/widget.js' defer></script> -->

    <div class="black-trim"></div>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-left">
            <h3>Find Us</h3>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.967543726041!2d90.40981897533585!3d23.74853677867159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b922024fd8fd%3A0xc3f4c50b3bc47bdc!2sLumen%20Dental%20Care!5e0!3m2!1sen!2sbd!4v1764595425357!5m2!1sen!2sbd"
                    width="100%"
                    height="200"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>

        <div class="footer-right">
            <h3>Contact Us For Appointments</h3>
            <p><strong>Phone:</strong> +88 01914071196</p>
            <p><strong>Email:</strong> lumendentalcare@gmail.com</p>
            <p><strong>Address:</strong> 113 DIT road, malibagh railgate, Dhaka 1217</p>
        </div>
    </footer>



    <!--  CHECK OPEN/CLOSED LOGIC  -->
    <script>
        function checkOpen() {
            const now = new Date();
            const day = now.getDay(); // 0 = Sunday, 1 = Monday ... 6 = Saturday
            const hour = now.getHours();
            const minute = now.getMinutes();

            let open = false;

            // Wednesday closed
            if (day === 3) {
                open = false;
            } else {
                // Open between 11:00 and 23:00
                if (hour > 10 && hour < 22) {
                    open = true;
                } else if (hour === 10 && minute >= 0) {
                    open = true;
                } else if (hour === 22 && minute === 0) {
                    open = true;
                }

                // BREAK: 14:00 – 16:00
                if ((hour > 14 && hour < 16) || (hour === 14) || (hour === 15)) {
                    open = false;
                }
            }

            alert(open ? "Yes, we are open!" : "We are closed.");
        }
    </script>


    <!-- SLIDER SCRIPT -->
    <script>
        let index = 0;
        const track = document.getElementById("sliderTrack");
        const slides = document.querySelectorAll(".slide-img");
        const totalSlides = slides.length;

        function slideImages() {
            index = (index + 1) % totalSlides;
            track.style.transform = "translateX(-" + (index * 100) + "%)";
        }

        setInterval(slideImages, 5000);
    </script>

    <script>
        function animateOnScroll() {
            const sections = document.querySelectorAll('.slide-in-left, .slide-in-right');

            sections.forEach(section => {
                const sectionTop = section.getBoundingClientRect().top;
                const triggerPoint = window.innerHeight; // trigger slightly before fully in view

                if (sectionTop < triggerPoint) {
                    section.classList.add('active');
                }
            });
        }

        // Run on scroll and on initial load
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>


</body>

</html>