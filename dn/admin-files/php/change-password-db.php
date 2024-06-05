<?php
    include("../user-files/php/config.php");

    if(isset($_POST['submit'])){
        $old_password = $_POST['oldPassword'];
        $new_password = $_POST['newPassword'];
        $confirm_new_password = $_POST['confirmPassword'];

        if($new_password == $confirm_new_password){
            // Check if the old password matches
            $query = "SELECT * FROM admin WHERE username = ?";
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, "s", $_SESSION['valid']);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($result);
            
            if($row) {
                $hashed_old_password = $row['password'];

                if(password_verify($old_password, $hashed_old_password)){
                    // If old password matches, hash the new password
                    $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);

                    // Update the password with hashed password
                    $update_query = "UPDATE admin SET password = ? WHERE username = ?";
                    $stmt = mysqli_prepare($con, $update_query);
                    mysqli_stmt_bind_param($stmt, "ss", $hashed_new_password, $_SESSION['valid']);
                    
                    if(mysqli_stmt_execute($stmt)){
                        echo "<p class='successfullyChanged'>Password Changed Successfully.</p>";
                    } else {
                        echo "<p class='notSuccessfullyChanged'>Error updating password: " . mysqli_error($con) . "</p>";
                    }
                } else {
                    echo "<p class='notSuccessfullyChanged'>Old password did not match.</p>";
                }
            } else {
                echo "<p class='notSuccessfullyChanged'>User not found.</p>";
            }
        } else {
            echo "<p class='notSuccessfullyChanged'>New password and confirm password do not match.</p>";
        }
    }
?>
