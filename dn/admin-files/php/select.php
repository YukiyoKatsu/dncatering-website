<?php
if(isset($_POST["quote_id"]))  
{
    $output = '';

    $connect = mysqli_connect("localhost", "root", "", "dn_database");  
    $query = "SELECT * FROM inquiry WHERE id = '".$_POST["quote_id"]."'";  
    $result = mysqli_query($connect, $query);  

}
?>