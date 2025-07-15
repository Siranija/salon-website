<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Information -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@400;600&family=Great+Vibes&display=swap" rel="stylesheet">
   

</head>

<body>
    <!-- Header Section -->
    <header>
        <img src="logo.jpg" alt="Salon Liyaruu Logo" class="logo">
        <h1>SALON LIYARUU</h1>
        <div>
        
        </div>
        <nav>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <!-- Dropdown for Services -->
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn" onclick="toggleDropdown()">SERVICES</a>
                    <div class="dropdown-content" id="dropdownMenu">
                        <a href="hair.php">Hair</a>
                        <a href="beauty.php">Beauty</a>
                        <a href="wedding.php">Wedding</a>
                        <a href="dress.php">Dress Rental</a>

                    </div>
                </li>
                <li><a href="prices.php">PRICES</a></li>
                <li><a href="review.php">REVIEWS</a></li>
                <li><a href="Contect.php">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <!-- Home Section -->
    <section class="home1">
        <div class="image">
            <img src="girl3.jpg" alt="Beauty Image">
        </div>
        <div class="text">
            <h1>Welcome to your Beauty oasis!</h1>
            <p>At LIYARUU Salon, beauty is more than a look, it's a feeling. We transform your look with personalized flair, blending creativity and elegance to bring out the best version of you.</p>
        </div>
    </section>

    <!-- Services Section -->
    <div class="home2">
        <h1>OUR SERVICES</h1>
        <p>Located in Thalagala, we pride ourselves on having an amazing team specializing in incredible treatments and unbeatable customer service.</p>
        <div class="services">
            <div class="services-category">
                <a href="beauty.html">
                    <img src="beautyhome.jpg" alt="Beauty Services">
                </a>
            </div>
            <div class="services-category">
                <a href="hair.html">
                    <img src="hairhome.jpg" alt="Hair Services">
                </a>
            </div>
            <div class="services-category">
                <a href="wedding.html">
                    <img src="wedding.jpg" alt="Wedding Services">
                </a>
            </div>
            <div class="services-category">
                <a href="dress.html">
                    <img src="dresshome.jpg" alt="Dress Services">
                </a>
            </div>
        </div>
        
    </div>

    <!-- Slideshow and Booking Section -->
    <section class="home3">
        <div class="slideshow-container">
            <img src="cosmatic1.jpg" class="slide fade" alt="Cosmetic Treatment 1">
            <img src="cosmatic2.jpg" class="slide fade" alt="Cosmetic Treatment 2">
            <img src="cosmatic3.jpg" class="slide fade" alt="Cosmetic Treatment 3">
            <img src="cosmatic4.jpg" class="slide fade" alt="Cosmetic Treatment 4">
            <img src="cosmatic5.jpg" class="slide fade" alt="Cosmetic Treatment 5">
        </div>
        <div class="content">
            <h1>Enhance your natural elegance with personalized, high-quality treatments!</h1>
            <div class="booking">
                <a href="Contect.php" class="booking-button">BOOK NOW</a>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="reviews">
        <h1>WHAT OUR CLIENTS SAY</h1>
        <div class="review-container">
            <div class="review r1 active">
                <p>"I love Liyaruu Salon! The owner is so talented and friendly. She gave me the perfect haircut and color that I've been wanting. I left feeling amazing!"<br><b>Miss Linali</b></p>
            </div>
            <div class="review r2">
                <p>"I had a great time at Liyaruu Salon! The owner is super nice and really knows her stuff. My makeup and hair turned out beautifully. Highly recommend!"<br><b>Miss Bhawanthi</b></p>
            </div>
            <div class="review r3">
                <p>"Liyaruu Salon is the best! The owner took her time to ensure everything was perfect. I got a beautiful updo for an event and received so many compliments!"<br><b>Mrs. Wickramasinghe</b></p>
            </div>
        </div>
        <div class="review-buttons">
            <button onclick="prevReview()" aria-label="Previous Review">◀</button>
            <button onclick="nextReview()" aria-label="Next Review">▶</button>
        </div>
    </section>

   
    <!-- Footer Section --> 
    <footer>
        <div class="footer-container">
            <!-- Google Map Section -->
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31696.235742139972!2d79.96123539350405!3d6.766261366744657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sthalagala!5e0!3m2!1sen!2slk!4v1736931144999!5m2!1sen!2slk" width="150" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="icon">
                    <a href="https://www.facebook.com/profile.php?id=100067347593091&mibextid=ZbWKwL" class="fa fa-facebook" target="_blank"></a>

                    <a href="https://www.instagram.com/liyar_uuu?igsh=c2M4eDdzeDFncXZo" target="_blank" class="fa fa-instagram"></a>

                </div>
            </div>
            <!-- Footer Links -->
            <div class="footer-center">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="prices.php">PRICES</a></li>
                    <li><a href="review.php">REVIEWS</a></li>
                    <li><a href="Contect.php">CONTACT</a></li>
                </ul>
                
            </div>
            <!-- Footer Info -->
            <div class="footer-right">
                <p>🕒 OPENING TIMES<br>9:00am - 7:00pm</p>
                <p>📍 OUR LOCATION<br>28/1B, Yakahaluwa, Kiriwaththuduwa, Thalagala, Sri Lanka</p>
                <p>📞 CONTACT US<br>+94774317600 / +94754920841</p>
            </div>
        </div>
        
        <div class="Rights">
            <p>© 2024 All Rights Reserved @ Liyaruu Salon | Designed & Developed by TEAM STYLBOOST</p>
        </div>
    </footer>

    
    <script src="home.js" defer></script>
</body>

</html>
