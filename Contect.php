<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="contect.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@400;600&family=Great+Vibes&display=swap" rel="stylesheet">
</head>
<body>

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
                <li><a href="Contact.php">CONTACT</a></li>
            </ul>
        </nav>
    </header>

      
<div class="demo">
<div class="description">
    <h1>GET IN TOUCH</h1>
    <p>Reach out to us for tailored beauty solutions and expert care!</p>
</div>

<div class="BODY">
    <div class="form-container">
        <form action="message.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <center>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
            </center>
        </form>
    </div>
    
</div>
<script src="script.js"></script>

<div class="contactdetails">
   <div class="contactdetails1">
   <p><b> Contact us for more details on pricing and personalized packages!</b></p>
   </div>
   <div class="contactdetails2">
   <p><b>OUR LOCATION</b><br>28/1B, Yakahaluwa,<br> Kiriwaththuduwa,<br>Thalagala,<br>Sri Lanka</p>
   <p><b>OUR PHONE</b><br>+94774317600 / +94754920841</p>
   </div>
</div>
</div>
</div>
</html>



 <!-- Footer -->
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
                <li><a href="reviews.php">REVIEWS</a></li>
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
</body>
</html>