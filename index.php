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
            <img src="logo.png" alt="Clinic Logo" class="logo">
            <h1 class="clinic-name">Lumen Dental Care</h1>
        </div>

        <!-- MIDDLE BUTTON -->
        <button class="open-btn" onclick="checkOpen()">Are we open?</button>

        <!-- RIGHT SIDE HOURS -->
        <div class="hours-text">
            Open from <strong>Thursday 11am - 11pm</strong><br>
            until <strong>Tuesday 11am - 11pm</strong>
        </div>

    </header>

    <div class="black-trim"></div>

    <!--  IMAGE SLIDER  -->
    <div class="slider-container">
        <div class="slider-track" id="sliderTrack">
            <img src="slide1.png" class="slide-img" alt="Slide 1">
            <img src="slide2.png" class="slide-img" alt="Slide 2">
            <img src="slide3.png" class="slide-img" alt="Slide 3">
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

    <div class="black-trim"></div>

    <!-- FOOTER -->
    <footer class="footer">
        <h3>Contact Us For Reservation</h3>
        <p><strong>Phone:</strong> +88 01734850085</p>
        <p><strong>Email:</strong> imtiazanammahmood@gmail.com</p>
        <p><strong>Address:</strong>Shohag AC counter,malibagh,Dhaka</p>
    </footer>


    <!--  CHECK OPEN/CLOSED LOGIC  -->
    <script>
        function checkOpen() {
            const now = new Date();
            const day = now.getDay();
            const hour = now.getHours();

            let open = false;

            if (day === 4 && hour >= 11) open = true;
            else if (day === 5 || day === 6 || day === 0 || day === 1) open = true;
            else if (day === 2 && hour < 23) open = true;

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

</body>

</html>