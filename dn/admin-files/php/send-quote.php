<?php
// Include database connection
require_once('config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '.././PHPMailer/src/Exception.php';
require '.././PHPMailer/src/PHPMailer.php';
require '.././PHPMailer/src/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer;

// Your SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dncateringservices3@gmail.com';     // SMTP username
$mail->Password = 'zpxs swmq zhkx hnel';               // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

// Set From, Subject, Body, etc.
$mail->setFrom('dncateringservices3@gmail.com', 'DN\'s Admin');
$mail->Subject = 'DN | Formal Quote Request';
$mail->isHTML(true);

// Check if inquiry_id is set
if (isset($_POST['inquiry_id'])) {
    $inquiry_id = $_POST['inquiry_id'];

    // Fetch email and name from database based on inquiry_id
    $query = "SELECT email, first_name, middle_name, last_name FROM inquiry WHERE id = $inquiry_id";
    $result = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];
        $name = $row['first_name'] . ' ' . $row['middle_name'] . ' ' . $row['last_name'];

        // Check if file was uploaded
        if (isset($_FILES['filename']) && $_FILES['filename']['error'] === UPLOAD_ERR_OK) {
            $filename = $_FILES['filename']['name'];
            $file_tmp_name = $_FILES['filename']['tmp_name'];
            $upload_dir = 'C:/xampp/htdocs/dn/uploads/';

            // Move uploaded file to permanent location
            if (move_uploaded_file($file_tmp_name, $upload_dir . $filename)) {
                // Update database with filename
                $update_query = "UPDATE inquiry SET attachment = '$filename' WHERE id = $inquiry_id";
                mysqli_query($mysqli, $update_query);
                
                // Add the file as an attachment
                $mail->addAttachment($upload_dir . $filename);
            }
        }

        $mail->AddEmbeddedImage('../pictures/logo.png', 'logo');
        $mail->Body = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>DN Formal Quote Request</title>
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
                    <p style="margin: 10px 0 5px 0; font-weight: bold; font-size: 18px; color: #3f3f3f;">Formal Quote Request</p>
                </div>
                <div class="container">
                    <p style="font-size: 16px; font-weight: 600; margin: 0 0 20px; color: #3f3f3f;">Hello, ' . $row['first_name'] . '!</p>
                    <p style="font-size: 15px; text-align: left; color: #3f3f3f;">We heard that you are requesting for a formal quote!</p>
                    <p style="font-size: 15px; text-align: left; color: #3f3f3f;">Attached in this email is the file for your formal quote.</p>
                    <br>
                    <p style="font-size: 15px; text-align: left; color: #3f3f3f;">Thanks,</p>
                    <p style="font-size: 15px; text-align: left; color: #3f3f3f; margin-bottom: 0">DN\'s Kreative Events & Party Needs</p>
                </div>
                <p style="font-size: 14px; margin-top: 20px; color: #3f3f3f; text-align: center;">You\'re receiving this email because you requested a formal quote on DN\'s system.</p>
            </body>
            </html>';
        // Add recipient email address
        $mail->addAddress($email, $name);

        // Send the email
        if (!$mail->send()) {
            // Display error message if email sending failed
            echo "
                <dialog open>
                    <div class='close'>
                        <p>DN's</p>
                        <svg class='close-button' xmlns='http://www.w3.org/2000/svg' width='15px' height='25px' viewBox='0 0 8 8'>
                            <path fill='white' d='M1.41 0L0 1.41l.72.72L2.5 3.94L.72 5.72L0 6.41l1.41 1.44l.72-.72l1.81-1.81l1.78 1.81l.69.72l1.44-1.44l-.72-.69l-1.81-1.78l1.81-1.81l.72-.72L6.41 0l-.69.72L3.94 2.5L2.13.72z'></path>
                        </svg>
                    </div>
                    <div class='thankyou'>
                        <p>Error Mail Not Sent</p>
                    </div>
                    <script>
                        const dialog = document.querySelector('dialog');
                        const closeModal = document.querySelector('.close-button');

                        closeModal.addEventListener('click', () => {
                            dialog.close();
                        }); 
                    </script>
                </dialog>";
        } else {
            $update_query = "UPDATE inquiry SET status = 'completed' WHERE id = $inquiry_id";
            mysqli_query($mysqli, $update_query);
            
            // Redirect back to formal-quote.php after mail sent
            header('Location: ../formal-quote.php');
            echo "
                <dialog open>
                    <div class='close'>
                        <p>DN's</p>
                        <svg class='close-button' xmlns='http://www.w3.org/2000/svg' width='15px' height='25px' viewBox='0 0 8 8'>
                            <path fill='white' d='M1.41 0L0 1.41l.72.72L2.5 3.94L.72 5.72L0 6.41l1.41 1.44l.72-.72l1.81-1.81l1.78 1.81l.69.72l1.44-1.44l-.72-.69l-1.81-1.78l1.81-1.81l.72-.72L6.41 0l-.69.72L3.94 2.5L2.13.72z'></path>
                        </svg>
                    </div>
                    <div class='thankyou'>
                        <p>Email Sent</p>
                    </div>
                    <script>
                        const dialog = document.querySelector('dialog');
                        const closeModal = document.querySelector('.close-button');

                        closeModal.addEventListener('click', () => {
                            dialog.close();
                        }); 
                    </script>
                </dialog>";
        }
    } else {
        echo 'No inquiry found with that ID.';
    }
}
?>
