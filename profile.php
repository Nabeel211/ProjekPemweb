<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOMBAKAR - Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">BOMBAKAR</div>
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
        <li><a href="#contact">Contact Us</a></li>
        <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="my profile.php">'.$_SESSION['username'].'</a></li>';
            echo '<li><a href="logout.php" class="btn-login">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php" class="btn-login">Log In</a></li>';
          }
          ?>
        </ul>
    </nav>
    </header>

    <section class="profile">
        <h1>Our Company</h1>
        <p>
            Founded in March 1965, in Konoha Village, our fire department has been dedicated to safeguarding the community for nearly six decades. Over the years, we have grown into a trusted institution equipped with skilled personnel and modern technology to respond swiftly to emergencies.
        </p>
        <img src="firefighters.jpg" alt="Firefighters">
        <p>
            Our mission is to ensure the safety and well-being of every resident. We uphold values of courage, resilience, and dedication. 
            <a href="#">More details...</a>
        </p>
    </section>

    <footer>
        <p>&copy; 2024 BOMBAKAR. All rights reserved.</p>
    </footer>
</body>
</html>
