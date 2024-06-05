<?php
    if(isset($_POST['submit'])){
        $email = $_POST["email"];
        $token = bin2hex(random_bytes(16));
        $token_hash = hash("sha256", $token);
        $expiry = date("Y-m-d H:i:s", time() + 60 * 30);
        $mysqli = require __DIR__."/config.php";
        $sql = "UPDATE admin
                SET reset_token = ?,
                    reset_token_expiration = ?
                WHERE email = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("sss", $token_hash, $expiry, $email);
        $stmt->execute();
        if ($mysqli->affected_rows) {
            $mail = require __DIR__."/mailer.php";
            $mail -> AddEmbeddedImage('./pictures/logo.png','logo');
            $mail -> setFrom("noreply@dncateringservices3.com");
            $mail -> addAddress($email);
            $mail -> Subject = "Forgot Password Reset Link";
            $mail -> Body = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>DN Admin Password Reset</title>
                <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
                <style>
                    body {
                        margin: 0;
                        padding: 0;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                        font-family: \'Montserrat\', sans-serif;
                        background-color: #f3f3f3;
                        flex-direction: column;
                    }
                    .container {
                        padding: 20px;
                        border-radius: 5px;
                        border: 1px solid gray;
                        color: #3f3f3f;
                        max-width: 500px;
                        text-align: center;
                        background-color: white;
                        margin: 0 auto;
                    }
                    .containerup {
                        padding: 0 20px 10px;
                        color: #3f3f3f;
                        max-width: 500px;
                        text-align: center;
                        background-color: white;
                        margin: 0 auto;
                    }
                    .logo-container img {
                        width: 50px;
                        height: auto;
                    }
                    .reset-link {
                        display: inline-block;
                        font-size: 15px;
                        font-weight: bold;
                        background-color: #3F3F3F;
                        border: 0;
                        cursor: pointer;
                        padding: 8px 20px;
                        margin: 10px 0;
                        color: #fff;
                        text-align: center;
                        text-decoration: none;
                        border-radius: 5px;
                    }
                    .reset-link:hover {
                        background-color: #7A591B;
                    }
                </style>
            </head>
            <body>
                <div class="containerup">
                    <div class="logo-container">
                        <img src="cid:logo" alt="">
                    </div>
                    <p style="margin: 10px 0 5px 0; font-weight: bold; font-size: 18px; color: #3f3f3f;">Reset your DN Admin password</p>
                </div>
                <div class="container">
                    <p style="font-size: 16px; font-weight: 600; margin: 0 0 20px; color: #3f3f3f;">DN Admin password reset</p>
                    <p style="font-size: 15px; text-align: left; color: #3f3f3f;">We heard you lost your DN\'s Admin password. Sorry about that!</p>
                    <p style="font-size: 15px; text-align: left; color: #3f3f3f;">But don\'t worry! You can use the following button to reset your password:</p>
                    <a href="http://localhost/dn/admin-files/forgot-password-reset.php?token='.$token.'" style="color: #FCC201;" class="reset-link">Reset your password</a>
                    <p style="font-size: 15px; text-align: left; color: #3f3f3f;">If you don\'t use this link within <i>30 minutes</i>, it will expire.</p>
                    <br>
                    <p style="font-size: 15px; text-align: left; color: #3f3f3f;">Thanks,</p>
                    <p style="font-size: 15px; text-align: left; color: #3f3f3f; margin-bottom: 0">The DN Developers</p>
                </div>
                <p style="font-size: 14px; margin-top: 20px; color: #3f3f3f; text-align: center;">You\'re receiving this email because a password reset was requested for your account.<br> This is an auto-generated email, Please do not reply.<br> </p>
            </body>
            </html>
            ';
            try {
                $mail->send();
            } catch (Exception $e) {
                echo "<p class='notSuccessfullyChanged'> Message could not be sent. Mailer error: {$mail->ErrorInfo} </p>";
            }
        }
        echo "<p class='successfullyChanged'> Message sent, please check your inbox. </p>";
    }
?>
