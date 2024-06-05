<?php
    if(isset($_POST['submit'])){
        $token = $_POST["token"];
        $new_password = $_POST['newPassword'];
        $confirm_new_password = $_POST['confirmPassword'];

        $token_hash = hash("sha256", $token);
        $mysqli = require __DIR__."/config.php";
        $sql = "SELECT * FROM admin WHERE reset_token = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s",$token_hash);
        $stmt->execute();
        $result = $stmt->get_result();
        $admin = $result->fetch_assoc();

        if($admin === null){
            header("Location: link-unavailable.php");
        }
        
        if(strtotime($admin["reset_token_expiration"]) <= time()){
            header("Location: link-expired.php");
        }

        $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);

        $sql = "UPDATE admin 
                SET password = ?,
                    reset_token = NULL,
                    reset_token_expiration = NULL
                WHERE id = ?";

        $stmt = $mysqli -> prepare($sql);
        $stmt -> bind_param("ss",$hashed_new_password,$admin["id"]);
        $stmt -> execute();
        echo "<p class='successfullyChanged'>Password Updated. Click <a class='linkToLogin' href='../admin.php'>Here</a> to Login.</p>";
    }
?>