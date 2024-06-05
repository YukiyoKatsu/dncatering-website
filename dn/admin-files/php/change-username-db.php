<?php
    if(isset($_POST['submit1'])){
        // Include the configuration file
        include("../user-files/php/config.php");

        // Retrieve the new username and password from the form
        $new_username = $_POST['newUsername'];
        $password = $_POST['confirmPassword1'];

        // Check if the new username and password are not empty
        if(!empty($new_username) && !empty($password)){
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
                    // Check if the new username is different from the current one
                    if($new_username !== $_SESSION['valid']){
                        // Update the username in the database
                        $update_query = "UPDATE admin SET username = ? WHERE username = ?";
                        $stmt = mysqli_prepare($con, $update_query);
                        mysqli_stmt_bind_param($stmt, "ss", $new_username, $_SESSION['valid']);

                        if(mysqli_stmt_execute($stmt)){
                            echo "<p class='successfullyChanged'>Username Changed Successfully.</p>";
                            // Update the session variable if the username is successfully changed
                            $_SESSION['valid'] = $new_username;
                        } else {
                            echo "<p class='notSuccessfullyChanged'>Error updating username: " . mysqli_error($con) . "</p>";
                        }
                    } else {
                        echo "<p class='notSuccessfullyChanged'>New username cannot be the same as the current one.</p>";
                    }
                } else {
                    echo "<p class='notSuccessfullyChanged'>Incorrect password.</p>";
                }
            } else {
                echo "<p class='notSuccessfullyChanged'>User not found.</p>";
            }
        } else {
            echo "<p class='notSuccessfullyChanged'>New username and password cannot be empty.</p>";
        }
    }
?>
