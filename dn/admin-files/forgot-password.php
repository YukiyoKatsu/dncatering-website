
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="view-transition" content="same-origin" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title id="headTitle" class="headTitle">Admin DN | Forgot Password</title>
        <link rel="icon" type="image/x-icon" href="pictures\logo.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles\log-in-styles.css">
    </head>

    <body>

        <div class="box">
            <h1 class="title">Forgot Password</h1>
            <p class="title">DN's Kreative Events & Party Needs</p>
            <?php
                include("php/send-password-reset.php");
            ?>
            <form action="" method="post" class="logIn_container">
                <label for="" class="label">Email</label>
                <input type="email" name="email" id="email" class="input" placeholder="Enter your email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Format: username@email.com" required>

                <div class="encrypt">
                    <p class="recoverPass"><a href="../admin.php">Go to Log In</a></p>
                </div>

                <button type="submit" name="submit" class="submitbutton">Send Password Reset Link</button>
            </form>
        </div>

    </body>
    <script src="Scripts\Script.js"></script>
</html>