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
      <div class="navbar">
        <h1>BOMBAKAR</h1>
      </div>
      <h2>Create your account!</h2>
      <form method="POST" action="processSignUp.php">
        <!-- Username Input -->
        <input type="text" class="input-with-icon username" placeholder="Username" required>
        
        <!-- Password Input -->
        <input type="password" class="input-with-icon password" placeholder="Password" required>
        
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
