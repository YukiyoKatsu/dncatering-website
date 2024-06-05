
<?php
include("../../user-files/php/config.php");

if(isset($_POST['action']) && isset($_POST['feedback_id'])) {
    $action = $_POST['action'];
    $feedback_id = $_POST['feedback_id'];

    // Perform database operations based on the action
    if($action === 'show') {
        // Insert the feedback into the feedback_ctrl table
        $insert_query = "INSERT INTO feedback_ctrl (id, name, rate, comments, date) SELECT id, name, rate, comments, date FROM customers_feedback WHERE id = $feedback_id";
        $result_insert = mysqli_query($con, $insert_query);
        
        if($result_insert) {
            // Feedback successfully shown, you can handle the response accordingly
            echo json_encode(array("success" => true, "message" => "Feedback shown successfully."));
        } else {
            // Error occurred while inserting feedback
            echo json_encode(array("success" => false, "message" => "Error showing feedback."));
        }
    } elseif($action === 'hide') {
        // Delete the feedback from the feedback_ctrl table
        $delete_query = "DELETE FROM feedback_ctrl WHERE id = $feedback_id";
        $result_delete = mysqli_query($con, $delete_query);
        
        if($result_delete) {
            // Feedback successfully hidden, you can handle the response accordingly
            echo json_encode(array("success" => true, "message" => "Feedback hidden successfully."));
        } else {
            // Error occurred while deleting feedback
            echo json_encode(array("success" => false, "message" => "Error hiding feedback."));
        }
    }
} else {
    // Invalid request, handle accordingly
    echo json_encode(array("success" => false, "message" => "Invalid request."));
}

?>
