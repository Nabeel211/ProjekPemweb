<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <style>
        body {
          font-family: Arial, sans-serif;
          margin: 30px;
          padding: 0;
          background-color: #2b2b2b;
          color: #fff;
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

        .breadcrumb {
          padding: 35px 20px;
          color: #ff9900;
        }
        
        .container {
          display: flex;
          padding: 40px;
        }
        
        .sidebar {
          width: 20%;
          padding: 10px;
        }
        
        .sidebar h2 {
          color: #ff9900;
        }
        
        .profile-form {
          width: 80%;
          background-color: #800000;
          padding: 30px;
          border-radius: 8px;
        }
        
        .profile-form h2 {
          margin-bottom: 10px;
        }
        
        .profile-form label {
          display: block;
          margin-top: 10px;
        }
        
        .profile-form input {
          width: 100%;
          padding: 8px;
          margin-top: 5px;
          border: none;
          border-radius: 4px;
        }
        
        .profile-form .buttons {
          display: flex;
          justify-content: flex-end;
          margin-top: 20px;
        }
        
        .cancel-btn, .save-btn {
        border: none;
        padding: 8px 16px; /* Mengurangi ukuran tombol */
        cursor: pointer;
        border-radius: 5px;
        font-size: 0.9rem; /* Menyesuaikan ukuran font */
        transition: all 0.3s ease;
        font-weight: bold;
        margin-left: 10px; /* Memberikan jarak antar tombol */
      }

      .cancel-btn {
        background-color: #444;
        color: #fff;
        box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
      }

      .cancel-btn:hover {
        background-color: #666;
        color: #fff;
        transform: scale(1.05);
      }

      .save-btn {
        background-color: #ff9900;
        color: #fff;
        box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
      }

      .save-btn:hover {
        background-color: #cc7a00;
        transform: scale(1.05);
        box-shadow: 0px 5px 7px rgba(0, 0, 0, 0.3);
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
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="logout.php" class="btn-login">Log Out</a></li>
        <li>
          <a href="#profile" class="profile-btn">
            <img src="pict/username/png" alt="Profile" class="profile-img">
          </a>
        </li>        
        </ul>
    </nav>
  </header>
  <main>
    <div class="container">
      <aside class="sidebar">
        <h2>Manage My Account</h2>
        <ul class="nav-links">
          <li><a href="my training.html"></a></li>
        </ul>
      </aside>
      <section class="profile-form">
        <h2>Edit Your Profile</h2>
        <form id="profile-form">
          <label for="username">Username</label>
          <input type="text" id="username" placeholder="Enter your username" />
      
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Enter your email" />
      
          <h3>Password Changes</h3>
          <label for="current-password">Current Password</label>
          <input type="password" id="current-password" placeholder="Enter current password" />
      
          <label for="new-password">New Password</label>
          <input type="password" id="new-password" placeholder="Enter new password" />
      
          <label for="confirm-password">Confirm New Password</label>
          <input type="password" id="confirm-password" placeholder="Re-enter new password" />
      
          <div class="buttons">
            <button type="button" class="cancel-btn" id="cancel-btn">Cancel</button>
            <button type="submit" class="save-btn">Save Changes</button>
          </div>
        </form>
      </section>
    </div>
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
</body>
</html>
