<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Fire Fighter Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding-top:50px;
            background-color: #f4f4f4;
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

        .logo-text {
            font-size: 1.5rem;
            font-weight: bold;
            color: #e63946;
            letter-spacing: 1px;
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

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .training-info {
            background-color: #b30000;
            color: white;
            padding: 20px;
            border-radius: 5px;
            position: relative;
        }

        .training-info img {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 100px;
            height: auto;
            border-radius: 5px;
        }

        .training-info h2 {
            margin: 0;
        }

        .training-info .details {
            margin: 10px 0;
        }

        .form-section {
            margin-top: 20px;
        }

        .form-section h3 {
            color: #8c1a1a;
            margin-bottom: 10px;
        }

        form {
            display: grid;
            gap: 10px;
        }

        form label {
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="number"],
        form input[type="password"],
        form select {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            background-color: #ff9900;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #e68a00;
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
    </style>
</head>
<body>
    <header class="header">
        <!-- Navigation Bar -->
        <nav class="navbar">
            <div class="logo-container">
            <img src="pict/logo.png" alt="Bombakar Logo" class="logo-img">
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
                echo '<img src="username.png" alt="Profile" class="profile-img">';
            }
            else{
                echo '<li><a href="login.php" class="btn-login">Log In</a></li>';
            }
          ?>     
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="training-info">
            <h2>Training Fire Fighter</h2>
            <p class="details">Location: Konoha Village<br>Duration: 3 Days<br>Price Start: Rp2.000.000</p>
            <p class="details">Benefits:</p>
            <ul>
                <li>Certificate</li>
                <li>E-Module</li>
                <li>Membership</li>
                <li>Training Kit</li>
                <li>Professional Mentor</li>
            </ul>
            <img src="your-image-url-here.jpg" alt="Training Illustration">
        </div>

        <div class="form-section">
            <h3>Personal Information</h3>
            <form method="POST" action="paymentprocess">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" placeholder="Enter your first name">

                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" placeholder="Enter your last name">

                <label for="phone-number">Phone Number</label>
                <input type="text" id="phone-number" name="phone-number" placeholder="Enter your phone number">

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address">

                <h3>Payment Method</h3>
                <label for="payment">Payment Method</label>
                <select id="payment" name="payment">
                    <option value="credit-card">Credit Card</option>
                    <option value="cash">Cash on Delivery</option>
                </select>

                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" name="card-number" placeholder="Enter your card number">

                <label for="expiry">Expiry Date</label>
                <input type="text" id="expiry" name="expiry" placeholder="MM/YY">

                <label for="cvc">CVC Code</label>
                <input type="text" id="cvc" name="cvc" placeholder="Enter your CVC">

                <button type="submit">Register Now</button>
            </form>
        </div>
    </div>

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
