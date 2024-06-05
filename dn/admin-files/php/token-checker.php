<?php
    $token = $_GET["token"];
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

?>