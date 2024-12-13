<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-Up - Bombakar</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="signup">
  <div class="containerlogin">
    <div class="signup-form">
      <h2>Create your account!</h2>
      <form method="POST" action="insert.php">
        <!-- Username Input -->
        <input type="text" class="input-with-icon username" placeholder="Username" name="username" required>
        
        <!-- Password Input -->
        <input type="password" class="input-with-icon password" placeholder="Password" name="password" required>
        
        <!-- Password Verification Input -->
        <input type="password" class="input-with-icon password" placeholder="Password verification" required>
        
        <div class="checkbox">
          <input type="checkbox" id="agree-signup">
          <label for="agree-signup">I agree with Privacy Policy and Terms of Use</label>
        </div>
        <button type="submit" class="btn signup-btn">Sign Up</button>
      </form>      
      <p class="switch">Already have an account? <a href="login.html">Log in here</a></p>
    </div>
  </div>
</body>
</html>
