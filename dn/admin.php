<?php 
   include("admin-files/php/check-logout-session.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="view-transition" content="same-origin" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title id="headTitle" class="headTitle">Admin DN | Log In</title>
        <link rel="icon" type="image/x-icon" href="admin-files\pictures\logo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="admin-files\styles\log-in-styles.css">
    </head>

    <body>
        <div class="box">
            <h1 class="title">Admin Log In</h1>
            <p class="title">DN's Kreative Events & Party Needs</p>
            
            <form action="" method="post" class="logIn_container">
                <label for="" class="label">Username</label>
                <input type="text" name="username" class="input" placeholder="Enter your username" required>

                <label for="" class="label">Password</label>
                <div class="input_password">
                    <input type="password" id="password" name="password" class="input" placeholder="Enter your password" required>
                    <img src="admin-files\pictures\eye-close.png" id="eyeicon" onclick="myFunction('password')">
                </div>

                <p class="recoverPass"><a href="admin-files\forgot-password.php">Forgot Password?</a></p>

                <?php
                    include("admin-files/php/admin-login-db.php");
                ?>
                <button type="submit" name="submit" class="submitbutton">Log In</button>
            </form>
            
        </div>

    </body>
    <style>

    </style>
    <script src="admin-files\Scripts\Script.js"></script>
</html>