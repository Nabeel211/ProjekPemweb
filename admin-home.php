<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bombakar - Braving Flames</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo-container">
        <img src="homepage 1.png" alt="Bombakar Logo" class="logo-img">
        <span class="logo-text">ADMIN</span>
        </div>
        <ul class="nav-links">
        <li><a href="admin-home.php">Home</a></li>
        <li><a href="admin-history.php">History</a></li>
        <li><a href="admin-profile.php">About</a></li>
        <li><a href="admin-struktur.php">Structure</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php" class="btn-login">Log In</a></li>';
          }
          ?>
        </ul>
    </nav>
    <!-- Slider Section -->
    <div class="slider">
        <div class="static-content">
        <h1>Braving Flames, Saving Lives</h1>
        <p>Standing fearless against fire to protect lives and safeguard communities.</p>
        <a href="#" class="btn">Discover More</a>
    </div>
    <div class="slides">
        <div class="slide" style="background-image: url('homepage 1.png');"></div>
        <div class="slide" style="background-image: url('homepage 2.png');"></div>
        <div class="slide" style="background-image: url('homepage 3.png');"></div>
    </div>
        <button class="prev-btn">❮</button>
        <button class="next-btn">❯</button>
    </div>
</header>

<main>
    <!-- Company Section -->
    <section class="company" id="about">
        <h2>Our Company</h2>
            <p class="subtitle">A Legacy of Firefighting Excellence in Konoha Village</p>
        <p class="descriptioni">
        Founded on March 15, 1965, in the heart of Konoha Village, our fire department has been a steadfast guardian of the community for nearly six decades. Over the years, we have grown into a trusted institution equipped with skilled personnel and modern technology to respond swiftly to emergencies...
        </p>
        <a href="#" class="btn">More Details</a>
    </section>

    <!-- Operations Section -->
    <section class="operations" id="fire-services">
        <h3>Our Operations</h3>
        <h2>Fire Supression & Rescue Operations</h2>
        <div class="operation-cards">
        <div class="card">
            <img src="homepage 1.png" alt="Fire Suppression">
            <h3>Fire Suppression</h3>
        </div>
        <div class="card">
            <img src="homepage 2.png" alt="Emergency Medical">
            <h3>Emergency Medical Services</h3>
        </div>
        <div class="card">
            <img src="homepage 3.png" alt="Technical Rescue">
            <h3>Technical Rescue Services</h3>
        </div>
        <div class="card">
            <img src="homepage 1.png" alt="Fire Prevention">
            <h3>Fire Prevention & Education</h3>
        </div>
        </div>
    </section>
</main>

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
    <script src="script.js"></script>
</body>
</html>



