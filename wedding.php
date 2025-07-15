<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Information -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home -Wedding</title>
    <link rel="stylesheet" href="wedding.css">
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
    <section id="description" class="description">
        
        <div class="title">
            <h2>WEDDING PACKAGES</h2>
             <p>Make your big day even more special with our customized wedding packages. From bridal hair and makeup to complete styling, we ensure you look stunning on your special day!</p>
        </div>    
    </section>

        <div class="service-cards">
           
            <div class="card">
                <img src="wedding1.jpg" alt="Bridal Package" class="card-img">
                <div class="card-content">
                    <h3>Bridal Package</h3>
                    <p>Our bridal package is designed to pamper you from head to toe. It includes makeup, hairstyling, and a trial session to ensure you look flawless on your big day. We’ll make sure you radiate beauty and confidence as you walk down the aisle.</p>
                </div>
            </div>
            
            <div class="card">
                <img src="wedding2.jpg" alt="Bridesmaid and Flower Girls" class="card-img">
                <div class="card-content">
                    <h3>Bridesmaid & Flower Girls</h3>
                    <p>We offer special packages for your bridesmaids and flower girls to ensure they feel just as special as the bride. Our expert stylists create looks that complement the wedding theme and help your bridal party shine on your big day.</p>
                </div>
            </div>
            
            <div class="card">
                <img src="wedding3.jpg" alt="Flower Bouquets" class="card-img">
                <div class="card-content">
                    <h3>Flower Bouquets</h3>
                    <p>Our beautifully crafted flower bouquets are the perfect finishing touch for your wedding. Choose from a variety of styles and colors to match your theme and make your ceremony even more memorable.</p>
                </div>
            </div>
            
            <div class="card">
                <img src="wedding4.jpg" alt="Homecoming" class="card-img">
                <div class="card-content">
                    <h3>Homecoming Package</h3>
                    <p>Celebrate your special day with our homecoming package. From stunning makeup to elegant hairstyles, we’ll help you create the perfect look for this important event. Shine with confidence and elegance.</p>
                </div>
            </div>
            
            <div class="card">
                <img src="wedding5.jpg" alt="Custom Package" class="card-img">
                <div class="card-content">
                    <h3>Customize Your Package</h3>
                    <p>Our services are flexible! You can mix and match services to create a wedding package that suits your exact needs. Whether it’s hair, makeup, or a special touch, we’ll work with you to bring your vision to life.</p>
                </div>
            </div>
            
        </div>
            
            

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
        <!-- Copyright Information -->
        <div class="Rights">
            <p>© 2024 All Rights Reserved @ Liyaruu Salon | Designed & Developed by TEAM STYLBOOST</p>
        </div>
    </footer>

    <!-- External Script File -->
    <script src="home.js" defer></script>
</body>

</html>
