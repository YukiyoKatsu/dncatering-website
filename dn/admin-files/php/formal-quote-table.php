<?php
    require_once("../user-files/php/config.php");
    require_once("php/select.php");

    if(isset($_POST['submit_status'])){
        $status = $_POST['status'];
        $inquiry_id = $_POST['inquiry_id'];
        // Update the status in the database
        $update_query = "UPDATE inquiry SET status = '$status' WHERE id = $inquiry_id";
        mysqli_query($con, $update_query);
    }

    $query = "SELECT * FROM inquiry WHERE status != 'completed'"; // Modify query to exclude completed rows
    $result = mysqli_query($con, $query);

    while($row = mysqli_fetch_assoc($result)) {
        $submission_timestamp = $row['submission_timestamp'];
        if(empty($row['status'])) {
            $row['status'] = 'not-started';
            // Update the status in the database
            $update_query = "UPDATE inquiry SET status = 'not-started' WHERE id = ".$row['id'];
            mysqli_query($con, $update_query);
        }
        
        echo "
        <tr>
            <td class='dataTitle'>" . $row['submission_timestamp'] . "</td>
            <td class='dataTitle'>" . $row['date'] . "</td>
            <td class='dataTitle'>" . $row['event_type'] . "</td>
            <td class='dataTitle'>" . $row['first_name'] . "</td>
            <td class='dataTitle'>" . $row['middle_name'] . "</td>
            <td class='dataTitle'>" . $row['last_name'] . "</td>
            <td class='dataTitle'>
                <button class='showOtherDetails'>Show</button>
                <dialog class='otherDetailsDialog'>
                    <div class='dialogHeader'>
                        <p class='headerCustomerName'>
                            " . $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name'] . "
                        </p>
                        <button class='closeDialog'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='15px' height='15px' viewBox='0 0 8 8'>
                                <path fill='#3F3F3F'
                                    d='M1.41 0L0 1.41l.72.72L2.5 3.94L.72 5.72L0 6.41l1.41 1.44l.72-.72l1.81-1.81l1.78 1.81l.69.72l1.44-1.44l-.72-.69l-1.81-1.78l1.81-1.81l.72-.72L6.41 0l-.69.72L3.94 2.5L2.13.72z' />
                            </svg>
                        </button>
                    </div>
                    <div class='otherDetailContainer'>
                        <div class='detailDivider'>
                            <p class='infoTitle'>Email: &nbsp;</p>
                            <p class='information'>" . $row['email'] . "</p>
                        </div>
                        <div class='detailDivider'>
                            <p class='infoTitle'>Phone Number: &nbsp;</p>
                            <p class='information'>" . $row['phone_number'] . "</p>
                        </div>
                        <div class='detailDivider'>
                            <p class='infoTitle'>Event Type: &nbsp;</p>
                            <p class='information'>" . $row['event_type'] . "</p>
                        </div>
                        <div class='detailDivider'>
                            <p class='infoTitle'>Package: &nbsp;</p>
                            <p class='information'>" . $row['package'] . "</p>
                        </div>
                        <div class='detailDivider'>
                            <p class='infoTitle'>Other Details: &nbsp;</p>
                        </div>
                        <div class='detailDivider'>
                            <div class='otherInformation'>
                                " . $row['other_details'] . "
                            </div>
                        </div>
                    </div>
                    <div class='uploadFiles'>
                        <hr class='horizontalline'>
                        <p class='uploadFiles_Text'>Click on the 'Choose File' button to upload a file:</p>

                        <form id='send-quote-form' class='uploadFiles_form' action='php/send-quote.php' method='post' enctype='multipart/form-data'>
                            <input type='hidden' name='email' value='".htmlspecialchars($row['email'])."'>
                            <input type='hidden' name='inquiry_id' value='".htmlspecialchars($row['id'])."'>
                            <input type='file' class='uploadFiles_button' id='myFile' name='filename' required>
                            <input type='submit' class='uploadFiles_button' name='send_quote' value='Send Formal Quote'>
                        </form>

                    </div>
                    <button onclick='myFunction(this)' class='myBtn'>Show more</button>
                </dialog>
            </td>
            <td>
                <form method='post'>
                    <input type='hidden' name='inquiry_id' value='".$row['id']."'>
                    <select name='status' class='statusSelect strtolower ".$row['status']."' onchange='this.form.submit()'>
                        <option value='
                        not-started' ".($row['status'] == 'not-started' ? 'selected' : '').">Not Started</option>
                        <option value='pending' ".($row['status'] == 'pending' ? 'selected' : '').">Pending</option>
                        <option value='completed' ".($row['status'] == 'completed' ? 'selected' : '').">Transfer</option>
                    </select>

                    <input type='hidden' name='submit_status'>
                    <input type='hidden' name='submit_status'>
                </form>                        
            </td>
        </tr>";
    }
?>
