<?php
    if(isset($_POST['submit']) && $_POST['g-recaptcha-response'] != ""){
        $secret = '6Lca0vApAAAAAEidP-MPwE4o_LOZ24juiE38oiZ-';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        
        if($responseData->success){
            // Get form data
            $rate = htmlspecialchars($_POST['rate']);
            $name = isset($_POST['name']) && !empty($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Anonymous Client';
            $comments = htmlspecialchars($_POST['comments']);
            $date = date("Y-m-d H:i:s");
            
            // Escape special characters to prevent SQL injection
            $rate = mysqli_real_escape_string($con, $rate);
            $name = mysqli_real_escape_string($con, $name);
            $comments = mysqli_real_escape_string($con, $comments);
            
            // Insert data into the database
            $query = "INSERT INTO customers_feedback (date, rate, name, comments) VALUES ('$date', '$rate', '$name', '$comments')";
            mysqli_query($con, $query) or die("Error Occurred");
        }
    }
?>