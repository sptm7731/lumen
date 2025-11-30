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
        <p><strong>Phone:</strong> +88 01914071196</p>
        <p><strong>Email:</strong> lumendentalcare@gmail.com</p>
        <p><strong>Address:</strong>113 DIT road,malibagh railgate,Dhaka 1217</p>
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

</body>

</html>