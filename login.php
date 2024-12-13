<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bombakar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login">
    <div class="containerlogin">
        <div class="login-form">
        <div class="logo">
        <h1>BOMBAKAR</h1>
        </div>
        <h2>Hi, Bombakers! Welcome back</h2>
        <form method="POST" action="processLogin.php">
            <!-- Username Input -->
            <input type="text" class="input-with-icon username" name="username" placeholder="Username" required>
            
            <!-- Password Input -->
            <input type="password" class="input-with-icon password" name="pwd" placeholder="Password" required>
            
            <div class="checkbox">
                <input type="checkbox" id="agree-login">
                <label for="agree-login">I agree with Privacy Policy and Terms of Use</label>
            </div>
            <button type="submit" class="btn login-btn">Login</button>
        </form>
        <p class="switch">Don't have an account? <a href="register.php">Sign up here</a></p>        
    </div>
    </div>
</body>
</html>
