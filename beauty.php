<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - beauty</title>
    <link rel="stylesheet" href="beauty.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@400;600&family=Great+Vibes&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header>
        <img src="logo.jpg" alt="Salon Liyaruu Logo" class="logo">
        <h1>SALON LIYARUU</h1>
        <nav>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                
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
        <h2>BEAUTY</h2>
        <p>Experience the transformative power of our premium beauty treatments, tailored to enhance your natural features and boost your confidence.</p>
        </div>    
    </section>
        <div class="service-cards">
            
            <div class="card">
                <div class="card-img-container">
                    
                    <img src="beauty1.jpg" alt="Forehead Threading" class="card-img">
                </div>
                <div class="card-content">
                    <h3>Forehead Threading</h3>
                    <p>Precisely shaped and smooth forehead with expert threading.</p>
                </div>
            </div>

            <div class="card">
                <img src="beauty2.jpg" alt="Upper Lip Threading" class="card-img">
                <div class="card-content">
                    <h3>Upper Lip Threading</h3>
                    <p>Get rid of unwanted hair for a clean and polished look.</p>
                </div>
            </div>

            <div class="card">
                <img src="beauty3.jpg" alt="Eyebrow Threading" class="card-img">
                <div class="card-content">
                    <h3>Eyebrow Threading</h3>
                    <p>Beautifully shaped brows tailored to suit your facial features.</p>
                </div>
            </div>

            <div class="card">
                <img src="beauty4.jpg" alt="Full Face Threading" class="card-img">
                <div class="card-content">
                    <h3>Full Face Threading</h3>
                    <p>Complete hair removal for smooth and flawless skin.</p>
                </div>
            </div>

            <div class="card">
                <img src="beauty5.jpg" alt="Clean-Up" class="card-img">
                <div class="card-content">
                    <h3>Clean-Up</h3>
                    <p>A quick and effective skincare treatment for refreshed skin.</p>
                </div>
            </div>

            <div class="card">
                <img src="beauty6.jpg" alt="Full Facial" class="card-img">
                <div class="card-content">
                    <h3>Full Facial</h3>
                    <p>Indulge in a luxurious treatment for radiant and healthy skin.</p>
                </div>
            </div>

            <div class="card">
                <img src="beauty7.jpg" alt="Makeup Services" class="card-img">
                <div class="card-content">
                    <h3>Makeup</h3>
                    <p>Professional makeup for weddings, parties, and special occasions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31696.235742139972!2d79.96123539350405!3d6.766261366744657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sthalagala!5e0!3m2!1sen!2slk!4v1736931144999!5m2!1sen!2slk" width="150" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="icon">
                    <a href="https://www.facebook.com/profile.php?id=100067347593091&mibextid=ZbWKwL" class="fa fa-facebook" target="_blank"></a>

                    <a href="https://www.instagram.com/liyar_uuu?igsh=c2M4eDdzeDFncXZo" target="_blank" class="fa fa-instagram"></a>

                </div>
            </div>
            
            <div class="footer-center">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="prices.php">PRICES</a></li>
                    <li><a href="review.php">REVIEWS</a></li>
                    <li><a href="Contect.php">CONTACT</a></li>
                </ul>
                
            </div>
        
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
