<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dn_database";
    
    // Create connection
    $mysqli = new mysqli($host, $username, $password, $dbname);
    
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    
    return $mysqli;
?>
