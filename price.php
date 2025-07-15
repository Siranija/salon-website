<?php
// Database configuration
$host = 'localhost'; //  host
$username = 'root'; //username (default in XAMPP)
$password = ''; // password 
$dbname = 'salon'; // Name of your database

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// Query to fetch data from the database
$sql = "SELECT service_name, price FROM prices";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    echo "<table class='price-table'>
            <thead>
                <tr>
                    <th>Service</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>";
    
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['service_name'] . "</td>
                <td>" . $row['price'] . "</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "0 results";
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>price</title>
    <link rel="stylesheet" href="price.css">
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
                <li><a href="home.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <!-- Dropdown for Services -->
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn" onclick="toggleDropdown()">SERVICES</a>
                    <div class="dropdown-content" id="dropdownMenu">
                        <a href="hair.html">Hair</a>
                        <a href="beauty.html">Beauty</a>
                        <a href="wedding.html">Wedding</a>
                        <a href="dress.html">Dress Rental</a>

                    </div>
                </li>
                <li><a href="price.html">PRICES</a></li>
                <li><a href="review.html">REVIEWS</a></li>
                <li><a href="Contect.html">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    <div class="demo">
        <div class="description">
            <h1>WELCOME TO OUR SALON</h1>
            <p>Experience luxury at affordable prices</p>
        </div>

<!-- Hair Cuts - Ladies -->
<section class="section-title">
    <h1>Hair Cuts - Ladies</h1>
</section>
<table class="price-table">
    <thead>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Women's Haircut (Dry Cut)</td>
            <td>Rs2000.00</td>
        </tr>
        <tr>
            <td>Shampoo, Cut & Blow-Dry</td>
            <td>Rs3300.00</td>
        </tr>
        <tr>
            <td>Exclusive Cut & Style by Creative Director</td>
            <td>Rs5000.00</td>
        </tr>
        <tr>
            <td>One-Length Trim</td>
            <td>Rs1950.00</td>
        </tr>
        <tr>
            <td>Hair Wash Service</td>
            <td>Rs1500.00</td>
        </tr>
        <tr>
            <td>Children's Haircut</td>
            <td>Rs1700.00</td>
        </tr>
    </tbody>
</table>

<!-- Hair Setting - Ladies -->
<section class="section-title">
    <h1>Hair Setting - Ladies</h1>
</section>
<table class="price-table">
    <thead>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Blow Dry & Setting/Ironing</td>
            <td>Rs5,310.00</td>
        </tr>
    </tbody>
</table>

<!-- Chemical Treatments Section -->
<section class="section-title">
    <h1>Chemical Treatments</h1>
</section>
<table class="price-table">
    <thead>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Perm / Smoothening / Rebonding</td>
            <td>Starting from Rs9000.00</td>
        </tr>
        <tr>
            <td>Keratin Treatment</td>
            <td>Rs15000.00</td>
        </tr>
    </tbody>
</table>

<!-- Scalp Massage Section -->
<section class="section-title">
    <h1>Scalp Massage</h1>
</section>
<table class="price-table">
    <thead>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Oil & Steam Head Massage</td>
            <td>Rs3000.00</td>
        </tr>
        <tr>
            <td>Deep Conditioning Treatment</td>
            <td>Rs1800.00</td>
        </tr>
        <tr>
            <td>Dandruff Treatment</td>
            <td>Rs2000.00</td>
        </tr>
        <tr>
            <td>Hair Loss Treatment</td>
            <td>Rs4100.00</td>
        </tr>
        <tr>
            <td>Hair Spa with Serum</td>
            <td>Rs5000.00</td>
        </tr>
    </tbody>
</table>

<!-- Beauty Services Section -->
<section class="section-title">
    <h1>Beauty Services</h1>
</section>

<!-- Threading Services -->
<h3>Threading Services</h3>
<table class="price-table">
    <thead>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Forehead Threading</td>
            <td>Rs250.00</td>
        </tr>
        <tr>
            <td>Upper lip Threading</td>
            <td>Rs250.00</td>
        </tr>
        <tr>
            <td>Eyebrow Threading</td>
            <td>Rs300.00</td>
        </tr>
        <tr>
            <td>Cheek Threading</td>
            <td>Rs250.00</td>
        </tr>
        <tr>
            <td>Full face Threading</td>
            <td>Rs750.00</td>
        </tr>
    </tbody>
</table>

<!-- Waxing Services -->
<h3>Waxing Services</h3>
<table class="price-table">
    <thead>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Underarm Waxing</td>
            <td>Rs800.00</td>
        </tr>
        <tr>
            <td>Half Arm Waxing</td>
            <td>Rs1700.00</td>
        </tr>
        <tr>
            <td>Full Arm Waxing</td>
            <td>Rs3000.00</td>
        </tr>
        <tr>
            <td>Half leg Waxing</td>
            <td>Rs2200.00</td>
        </tr>
        <tr>
            <td>Full leg Waxing</td>
            <td>Rs3200.00</td>
        </tr>
        <tr>
            <td>Bikini Line Waxing</td>
            <td>Rs1500.00</td>
        </tr>
        <tr>
            <td>Full body Waxing</td>
            <td>Rs10000.00</td>
        </tr>
    </tbody>
</table>

<!-- Bleaching Services -->
<h3>Bleaching Services</h3>
<table class="price-table">
    <thead>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Upper Lip Bleaching</td>
            <td>Rs500.00</td>
        </tr>
        <tr>
            <td>Face & Neck Bleaching</td>
            <td>Rs1900.00</td>
        </tr>
        <tr>
            <td>Underarm Bleaching</td>
            <td>Rs600.00</td>
        </tr>
        <tr>
            <td>Half Arm Bleaching</td>
            <td>Rs2200.00</td>
        </tr>
        <tr>
            <td>Full Arm Bleaching</td>
            <td>Rs2200.00</td>
        </tr>
        <tr>
            <td>Half Leg Bleaching</td>
            <td>Rs2500.00</td>
        </tr>
        <tr>
            <td>Full Leg Bleaching</td>
            <td>Rs3000.00</td>
        </tr>
        <tr>
            <td>Full Body Bleaching</td>
            <td>Rs15000.00</td>
        </tr>
    </tbody>
</table>

<!-- Hand & Foot Care -->
<h3>Hand & Foot Care</h3>
<table class="price-table">
    <thead>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Manicure</td>
            <td>Rs2500.00</td>
        </tr>
        <tr>
            <td>Gel/Acrylic Nails</td>
            <td>Rs1500.00</td>
        </tr>
        <tr>
            <td>Pedicure</td>
            <td>Rs3500.00</td>
        </tr>
        <tr>
            <td>Foot Massage</td>
            <td>Rs3200.00</td>
        </tr>
    </tbody>
</table>

<!-- Facial Treatments -->
<h3>Facial Treatments</h3>
<table class="price-table">
    <thead>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Clean Up</td>
            <td>Rs2000.00</td>
        </tr>
        <tr>
            <td>Full Facial</td>
            <td>Rs3500.00</td>
        </tr>
    </tbody>
</table>

<!-- Special Skin Treatments -->
<h3>Special Skin Treatments</h3>
<table class="price-table">
    <thead>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Skin Lightening Treatment</td>
            <td>Rs5000.00</td>
        </tr>
        <tr>
            <td>Eye Treatment</td>
            <td>Rs3000.00</td>
        </tr>
        <tr>
            <td>Back Treatment</td>
            <td>Rs5000.00</td>
        </tr>
        <tr>
            <td>Advanced Facial/Gold Facial</td>
            <td>Rs10000.00</td>
        </tr>
    </tbody>
</table>

<!-- Wedding Packages Section -->
<section class="section-title">
    <h1>Wedding Packages</h1>
</section>
<table class="price-table">
    <thead>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Engagement Dressing</td>
            <td>Rs40000</td>
        </tr>
        <tr>
            <td>Dressing of the Bride with Trials and Flowers</td>
            <td>Rs90000</td>
        </tr>
        <tr>
            <td>Homecoming with Flowers</td>
            <td>Rs60000</td>
        </tr>
        <tr>
            <td>Going Away Change (Optional)</td>
            <td>Rs25000</td>
        </tr>
        <tr>
            <td>Bridesmaid with Flowers</td>
            <td>Rs29000</td>
        </tr>
        <tr>
            <td>Flower Girls</td>
            <td>Rs7000</td>
        </tr>
    </tbody>
</table>

<!-- Dress Rental Categories Section -->
<section class="section-title">
    <h1>Dress Rentals</h1>
</section>
<table class="price-table">
    <thead>
        <tr>
            <th>Service</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Wedding Dresses</td>
            <td>Starting from Rs10000.00</td>
        </tr>
        <tr>
            <td>Formal Wear</td>
            <td>Starting from Rs10000.00</td>
        </tr>
        <tr>
            <td>Party Dresses</td>
            <td>Starting from Rs10000.00</td>
        </tr>
        <tr>
            <td>Cultural and Traditional Dresses</td>
            <td>Starting from Rs10000.00</td>
        </tr>
    </tbody>
</table>
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
                    <li><a href="home.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="price.html">PRICES</a></li>
                    <li><a href="reviews.html">REVIEWS</a></li>
                    <li><a href="Contect.html">CONTACT</a></li>
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
