<?php 
   session_start();
   if(!empty($_SESSION['valid'])){
    header("Location: admin-files/feedback.php");
   }
?>