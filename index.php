<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php"); // Redirect if already logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Analytics</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/style.css">



</head>

<body>


    <!-- Here you can do any chage but dont do any chage in button id or function you can change style and any other UI part as your wish  -->
    <header>
        <h1>Welcome to Social Analytics</h1>
        <button id="login-main" onclick="openPopup('login-popup')">Login</button>
        <button id="signup-main" onclick="openPopup('signup-popup')">Sign Up</button>
    </header>
    <!--  In this block of code don't make any chage  it is not releated to Home page UI if for Loging anf signup Style  -->
      <!-- Login Start -->
    <div id="login-popup" class="popup">
        <div class="login-container">
            <span class="close" onclick="closePopup('login-popup')">&times;</span>
            <h2>Login</h2>
            <div class="input-group">
                <input type="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" required>
                <span class="material-icons eye-icon" style="font-size: 18px;" onclick="togglePassword(event)">visibility_off</span>

            </div>
            <a href="views\password_reset.php" class="forgot-password">Forgot password?</a>
            <button class="login-btn">Login</button>
            <p class="signup-link">Don't have an account? <a href="#" onclick="switchPopup('login-popup', 'signup-popup')">Signup</a></p>
            <div class="or-divider"><span>Or</span></div>
            <div class="social-login">
                <button class="social-btn facebook-btn"> <span class="material-icons facebook-icon">facebook</span>Login with Facebook</button>
                <button class="social-btn google-btn"><img src="assets/images/google-icon.svg" alt="google"></i>Login with Google</button>
            </div>
        </div>
    </div>

    <!-- Login End -->

    <!-- Signup Start -->
    <div id="signup-popup" class="popup">
        <div class="signup-container">
            <span class="close" onclick="closePopup('signup-popup')">&times;</span>
            <h2>Signup</h2>
            <div class="input-group">
                <input type="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Create password" required>
                <span class="material-icons eye-icon" style="font-size: 18px;" onclick="togglePassword(event)">visibility_off</span>

            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm password" required>
                <span class="material-icons eye-icon" style="font-size: 18px;" onclick="togglePassword(event)">visibility_off</span>

            </div>
            <button class="signup-btn">Signup</button>
            <p class="login-link">Already have an account? <a href="#" onclick="switchPopup('signup-popup', 'login-popup')">Login</a></p>
            <div class="or-divider"><span>Or</span></div>
            <div class="social-login">
                <button class="social-btn facebook-btn"> 
                    <span class="material-icons facebook-icon">facebook</span>

                    <span>Login with Facebook</span></button>
                <button class="social-btn google-btn"><img src="assets/images/google-icon.svg" alt="google"></i>Login with Google</button>
            </div>
        </div>
    </div>

    <!-- Signup End -->

    <!-- This is js file for Index.php means home Page.  -->
    <script src="assets/js/main.js"></script>
</body>

</html>