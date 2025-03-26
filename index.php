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

        <form action="">
            <img src="search.png" alt="">
            <input type="text" placeholder="Search">
        </form>

        <div class="icons">
            <img src="profile.jpg" alt="" class="profile">

            <img src="cart.jpg" alt="" class="cart">
        </div>
    </div>

    <div class="container">
        <img src="picture.jpg" alt="" class="hero-image">

        <div class="login-form">
            <div class="upper">
                <h1>NeoFit Account</h1>

                <div class="choice">
                    <div class="login">
                        <h3>Login</h3>
                        <div class="line"></div>
                    </div>
                    <div class="sign-up" onclick="window.location.href='index copy.html'">
                        <h3>Sign Up</h3>
                        <div class="line-choice"></div>
                    </div>
                </div>

                <p>Welcome back! Log in using your email and password.</p>


                <form action="login.php" class="email-pass" method="POST">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit" name="submit" class="login-button">Login</button>
                </form>
                
                <div class="forgot-container">
                    <button class="forgot">Forgot Password?</button>
                </div>
                
                <p class="signing">By signing up, I accept NeoFit's Privacy Policy and Legal Statement.</p>
                
            </div>

            

            <div class="footer">
                <span>Contact US</span>
                <span>Find a Store</span>
                <span>About NeoFit</span>
            </div>
        </div>
    </div>

    

    
</body>
</html>