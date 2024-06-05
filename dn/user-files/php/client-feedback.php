<?php
include("user-files/php/config.php");

$query = "SELECT id, name, rate, comments FROM feedback_ctrl";
$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<li class='item2'>";
        echo "<div class='content2'>";
        echo "<div class='personalInfo'>";
        
        // Display customer name or set it as "Anonymous Client" if empty
        $customerName = !empty($row['name']) ? $row['name'] : "Anonymous Client";
        echo "<p class='customer_name'>" . $customerName . "</p>";
    
        // Display customer rating
        if($row['rate'] == 1) {
            echo "<p class='customer_rating'>⭐</p>";
        } else if($row['rate'] == 2) {
            echo "<p class='customer_rating'>⭐⭐</p>";
        } else if($row['rate'] == 3) {
            echo "<p class='customer_rating'>⭐⭐⭐</p>";
        } else if($row['rate'] == 4) {
            echo "<p class='customer_rating'>⭐⭐⭐⭐</p>";
        } else if($row['rate'] == 5) {
            echo "<p class='customer_rating'>⭐⭐⭐⭐⭐</p>";
        }
        
        // Display customer comments
        echo "<p class='customer_comments'>";
        echo $row['comments'];
        echo "</p>";
        
        echo "</div>"; // Close customerFeedback_details div
        
        echo "</div>"; // Close content2 div
        echo "</li>"; // Close list item
    }
}
?>