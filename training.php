<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bombakar Training</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #797979;
        }
        .btn-login {
            background: #e63946;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.3s, color 0.3s;
        }

        .btn-login:hover {
            background: white;
            color: #e63946;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10%;
            z-index: 20;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff;
            letter-spacing: 1px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

            /* Navbar with Logo */
        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            padding-right: 15% ;
        }

        .nav-links li {
            display: inline;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-size: 1rem;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #e63946;
        }
        .profile-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: transparent;
            border: none;
            cursor: pointer;
            padding: 0;
        }

        .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%; /* Membuat gambar berbentuk lingkaran */
            border: 2px solid #fff; /* Tambahkan border untuk estetika */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-img:hover {
            transform: scale(1.1);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3); /* Efek hover */
        }

        /* Footer Styling */
        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }
        .footer {
            background: #1a1a1a;
            color: white;
            padding: 2rem 10%;
            font-family: Arial, sans-serif;
            }
        
        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .footer-left {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex: 1;
        }
        
        .footer-logo {
            width: 50px;
            height: 50px;
        }
        
        .footer-left p {
            font-size: 1rem;
            margin: 0;
            line-height: 1.5;
        }
        
        .footer-right {
            flex: 1;
            text-align: center;
        }
        
        .footer-right h3 {
            font-size: 1.5rem;
            color: #e63946;
            margin-bottom: 1rem;
        }
        
        .footer-right iframe {
            width: 100%;
            max-width: 300px;
            height: 200px;
            border: none;
            border-radius: 5px;
        }
        
        /* Footer Bottom */
        .footer-bottom {
            text-align: center;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #333;
        }
        
        .footer-bottom p {
            font-size: 0.9rem;
            color: #aaa;
        }
    /* Main Content */
        .main-content {
            padding: 20px;
            max-width: 1100px;
            margin: 0 auto;
        }
        
        .section-title {
            font-size: 18px;
            margin-bottom: 20px;
            color: #666;
        }
        
        .training-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .training-card {
            background-color: #800000;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: #fff;
            display: flex;
            flex-direction: column;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: #ff6a00;
            color: #000;
            font-weight: bold;
            font-size: 14px;
        }

        .card-body {
            padding: 15px;
        }

        .card-body h3 {
            color: #ffb800;
            margin-bottom: 10px;
        }

        .slider {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slider img {
            width: 100%;
            object-fit: cover;
        }

        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            z-index: 10;
        }

        .slider-btn.left {
            left: 10px;
        }

        .slider-btn.right {
            right: 10px;
        }

        .register-btn {
            background-color: #ffb800;
            color: #800000;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
        }


        .description-section {
            background-color: #797979;
            padding: 10px 15px;
            color: #333;
            margin-top: 0;
            border-radius: 5px;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .description-section h3 {
            font-size: 1rem;
            color: #333;
            margin-bottom: 5px;
        }

        .description-section p {
            margin: 0;
        }

        .main-content {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <header class="header">
        <!-- Navigation Bar -->
        <nav class="navbar">
    <div class="logo-container">
            <img src="homepage 1.png" alt="Bombakar Logo" class="logo-img">
            <span class="logo-text">BOMBAKAR</span>
            </div>
            <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="profile.php">About</a></li>
            <li><a href="struktur.php">Structure</a></li>
            <li><a href="training.php">Training</a></li>
            <?php

            if(isset($_SESSION['username'])){
                echo '<li><a href="logout.php" class="btn-login">Log Out</a></li>';
                echo '<li><a href="my profile.php">'.$_SESSION['username'].'</a></li>';
                echo '<img src="username.png">';
            }
            else{
                echo '<li><a href="login.php" class="btn-login">Log In</a></li>';
            }
            ?>
        </ul>
    </nav>
    </header>
    <main class="main-content">
        <section class="training-section">
            <?php
                // Koneksi ke database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "bombakar";
                
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                // Cek koneksi
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                // Query untuk mengambil data pelatihan
                $sql = "SELECT * FROM training"; // Ganti ID dengan ID pelatihan yang diinginkan
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // Ambil data pelatihan
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="training-card">';
                        echo '    <div class="card-header">';
                        echo '        <span class="tag">' . htmlspecialchars($row['kategori']) . '</span>';
                        echo '        <span class="status">Trusted</span>';
                        echo '    </div>';
                        echo '    <div class="slider">';
                        echo '        <div class="slides">';
                        echo '            <img src="ASET/training/' . htmlspecialchars($row['image']). '">';
                        echo '        </div>';
                        echo '    </div>';
                        echo '    <div class="card-body">';
                        echo '        <h3>' . htmlspecialchars($row['nama']) . '</h3>';
                        echo '        <p><i class="fas fa-map-marker-alt"></i> ' . htmlspecialchars($row['lokasi']) . '</p>';
                        echo '        <p><i class="fas fa-clock"></i> ' . htmlspecialchars($row['waktu']) . '</p>';
                        echo '        <p><i class="fas fa-money-bill-wave"></i> ' . htmlspecialchars($row['harga']) . '</p>';
                        echo '        <p>Benefits: ' . htmlspecialchars($row['benefit']) . '</p>';
                        echo '        <a class="register-btn" href="payment.php?id=' . htmlspecialchars($row['id']) . '">Register Now</a>';
                        echo '    </div>';
                        echo '    <div class="description-section">';
                        echo '        <h3>Product Description</h3>';
                        echo '        <p>' . htmlspecialchars($row['description']) . '</p>';
                        echo '    </div>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>No training data available.</p>";
                }
                
                $conn->close();
            ?>
            <!-- <div class="training-card">
                <div class="card-header">
                    <span class="tag">Hot Certificate</span>
                    <span class="status">Trusted</span>
                </div>
                <div class="slider">
                    <button class="slider-btn left" onclick="prevSlide('slider1')">&#8249;</button>
                    <div class="slides" id="slider1">
                        <img src="firefighter-training.jpg" alt="Training Workshop">
                        <img src="firefighter-training-new.jpg" alt="Advanced Training">
                    </div>
                    <button class="slider-btn right" onclick="nextSlide('slider1')">&#8250;</button>
                </div>
                <div class="card-body">
                    <h3>Training Fire Fighter</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Konoha Village</p>
                    <p><i class="fas fa-clock"></i> 3 Days</p>
                    <p><i class="fas fa-money-bill-wave"></i> Rp2.000.000</p>
                    <p>Benefits: Certificate, E-module, Membership, Training Kit, Professional Mentor</p>
                    <button class="register-btn">Register Now</button>
                </div>
                <div class="description-section">
                    <h3>Product Description</h3>
                    <p>Join our Firefighting Training Workshop to gain practical safety skills, professional guidance from experienced firefighters, and an official certificate of achievement.</p>
                </div>
            </div> -->
            <!-- Product Description -->
            
            
            <!-- Card 2
            <div class="training-card">
                <div class="card-header">
                    <span class="tag">Best Certification</span>
                    <span class="status">Trusted</span>
                </div>
                <div class="slider">
                    <button class="slider-btn left" onclick="prevSlide('slider2')">&#8249;</button>
                    <div class="slides" id="slider2">
                        <img src="fire-safety.jpg" alt="Fire Safety Training">
                        <img src="fire-safety-new.jpg" alt="Advanced Fire Safety">
                    </div>
                    <button class="slider-btn right" onclick="nextSlide('slider2')">&#8250;</button>
                </div>
                <div class="card-body">
                    <h3>Fire Safety Training</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Konoha Village</p>
                    <p><i class="fas fa-clock"></i> 2 Days</p>
                    <p><i class="fas fa-money-bill-wave"></i> Rp500.000</p>
                    <p>Benefits: Certificate, E-module, Membership, Training Kit</p>
                    <button class="register-btn">Register Now</button>
                </div>
            </div>
            <div class="description-section">
                <h3>Product Description</h3>
                <p>This program is designed to provide practical knowledge and prepare you to respond confidently in emergency situations. Register now and enhance your preparedness!</p>
            </div> -->
        </section>
    </main>
    <script>
        function nextSlide(sliderId) {
            const slider = document.getElementById(sliderId);
            const slides = slider.querySelectorAll('img');
            const slideWidth = slides[0].clientWidth;
            const currentTransform = getComputedStyle(slider).transform;
            const currentTranslateX = currentTransform !== 'none' ? parseFloat(currentTransform.split(',')[4]) : 0;

            if (Math.abs(currentTranslateX) < (slides.length - 1) * slideWidth) {
                slider.style.transform = `translateX(${currentTranslateX - slideWidth}px)`;
            } else {
                slider.style.transform = 'translateX(0)';
            }
        }

        function prevSlide(sliderId) {
            const slider = document.getElementById(sliderId);
            const slides = slider.querySelectorAll('img');
            const slideWidth = slides[0].clientWidth;
            const currentTransform = getComputedStyle(slider).transform;
            const currentTranslateX = currentTransform !== 'none' ? parseFloat(currentTransform.split(',')[4]) : 0;

            if (currentTranslateX < 0) {
                slider.style.transform = `translateX(${currentTranslateX + slideWidth}px)`;
            } else {
                slider.style.transform = `translateX(-${(slides.length - 1) * slideWidth}px)`;
            }
        }
    </script>
    <footer>
        <footer class="footer">
            <div class="footer-container">
            <div class="footer-info">
                <h3>BOMBAKAR</h3>
                <p><strong>Phone:</strong> +62 123 456 789</p>
                <p><strong>Email:</strong> info@bombakar.com</p>
                <p><strong>Address:</strong> 123 Firefighter Avenue, Konoha Village</p>
            </div>
            <div class="footer-map">
                <h3>Find In Maps</h3>
                <div class="map">
                <!-- Replace with an embedded map or image -->
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354345093517!2d-122.41941518468232!3d37.77492927975967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c16a68d1b%3A0x8f77e8d8d7a3e9e9!2sSan+Francisco%2C+CA!5e0!3m2!1sen!2sus!4v1673624079273!5m2!1sen!2sus" 
                    width="300" 
                    height="200" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                </div>
            </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Bombakar | Braving Flames, Saving Lives</p>
            </div>
        </footer>      
    </footer>
</body>
</html>