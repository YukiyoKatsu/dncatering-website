<?php
    if(isset($_POST['submit2'])){
        // Include the configuration file
        include("../user-files/php/config.php");

        // Retrieve the new email and password from the form
        $new_email = $_POST['newEmail'];
        $password = $_POST['confirmPassword2'];

        // Check if the new email and password are not empty
        if(!empty($new_email) && !empty($password)){
            // Verify if the provided password matches the old password
            $query = "SELECT * FROM admin WHERE username = ?";
            $stmt = mysqli_prepare($con, $query);
            mysqli_stmt_bind_param($stmt, "s", $_SESSION['valid']);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($result);

            if($row) {
                $hashed_password = $row['password'];
                // Check if the password matches
                if(password_verify($password, $hashed_password)){
                    // Check if the new email is different from the current one
                    if($new_email !== $row['email']){
                        // Update the email in the database
                        $update_query = "UPDATE admin SET email = ? WHERE username = ?";
                        $stmt = mysqli_prepare($con, $update_query);
                        mysqli_stmt_bind_param($stmt, "ss", $new_email, $_SESSION['valid']);

                        if(mysqli_stmt_execute($stmt)){
                            echo "<p class='successfullyChanged'>Email Changed Successfully.</p>";
                        } else {
                            echo "<p class='notSuccessfullyChanged'>Error updating email: " . mysqli_error($con) . "</p>";
                        }
                    } else {
                        echo "<p class='notSuccessfullyChanged'>New email cannot be the same as the current one.</p>";
                    }
                } else {
                    echo "<p class='notSuccessfullyChanged'>Incorrect password.</p>";
                }
            } else {
                echo "<p class='notSuccessfullyChanged'>User not found.</p>";
            }
        } else {
            echo "<p class='notSuccessfullyChanged'>New email and password cannot be empty.</p>";
        }
    }
?>
