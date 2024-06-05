<?php
    include("user-files/php/config.php");
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $password = mysqli_real_escape_string($con,$_POST['password']);

        $result = mysqli_query($con,"SELECT * FROM admin WHERE username='$username'") or die("Select Error");
        $row = mysqli_fetch_assoc($result);

        if($row && password_verify($password, $row['password'])) {
            $_SESSION['valid'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];

            // Redirect if login is successful
            header("Location: admin-files/feedback.php");
            exit(); // Terminate script execution after redirect
        } else {
            // Display error message if login fails
            echo "
            <div class='message'>
                <p class='error_message'>Wrong Username or Password</p>
            </div>";
        }
    }
?>
