<?php 
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeoFit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <h1>NEOFit</h1>
        <div class="options">
            <h4>Trending</h4>
            <h4>Men</h4>
            <h4>Women</h4>
            <h4>Kids</h4>
            <h4>Sale</h4>
        </div>
        <form>
            <img src="search.png" alt="">
            <input type="text" placeholder="Search">
        </form>
        <div class="icons">
            <img src="profile.jpg" alt="Profile" class="profile">
            <img src="cart.jpg" alt="Cart" class="cart">
        </div>
    </div>
    
    <div class="container">
        <img src="picture.jpg" alt="Outfit" class="hero-image">
        <div class="login-form">
            <h1 class="auth-title">NeoFit Account</h1>
            
            <div class="choice">
                <div class="login" onclick="window.location.href='index.html'">
                    <h3>Login</h3>
                    <div class="line-choice"></div>
                </div>
                <div class="sign-up">
                    <h3>Sign Up</h3>
                    <div class="line"></div>
                </div>
            </div>
            
            <p class="auth-subtitle">Create an account for a better shopping experience!</p>

            <form class="email-pass" action="signup.php" method="POST">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="submit" class="sign-up-button">Sign Up</button>
            </form>
            

            <div class="footer">
                <span>Contact US</span>
                <span>Find a Store</span>
                <span>About NeoFit</span>
            </div>
        </div>
    </div>
</body>
</html>