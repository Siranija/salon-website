<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Information -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - hair</title>
    <link rel="stylesheet" href="hair.css">
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
            <h2>HAIR</h2>
            <p>Discover the art of hair styling with our expert treatments. Whether it's a fresh cut, color, or styling for a special occasion, we help you achieve your perfect look.</p>
            </div>    
    </section>

        <div class="service-cards">
           
            <div class="card">
                    <img src="hair1.jpg" alt="Haircuts & Styling" class="card-img">
                <div class="card-content">
                    <h3>Haircuts & Styling</h3>
                    <p>Our expert stylists will craft the perfect haircut to suit your face shape and lifestyle. Whether you're looking for a bold new look or a subtle refresh, we guarantee you'll leave feeling fabulous.</p>
                </div>
            </div>
            
            <div class="card">
                <img src="hair2.jpg" alt="Hair Coloring" class="card-img">
                <div class="card-content">
                    <h3>Hair Coloring</h3>
                    <p>Bring your hair to life with our vibrant coloring services. From subtle highlights to bold transformations, our hair colorists use the best products to give you the perfect shade with lasting results.</p>
                </div>
            </div>
            
            <div class="card">
                <img src="hair3.jpg" alt="Hair Treatments" class="card-img">
                <div class="card-content">
                    <h3>Hair Treatments</h3>
                    <p>Revitalize your hair with our nourishing treatments that restore shine and vitality. Whether you need deep conditioning, repairing damage, or adding extra volume, our treatments will leave your hair feeling silky and smooth.</p>
                </div>
            </div>
            
            <div class="card">
                <img src="hair4.jpg" alt="Bridal Hair Styling" class="card-img">
                <div class="card-content">
                    <h3>Bridal Hair Styling</h3>
                    <p>Make your wedding day even more memorable with our bridal hair styling services. Our experienced stylists will work with you to create the perfect look, whether you prefer an elegant updo or flowing waves.</p>
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
