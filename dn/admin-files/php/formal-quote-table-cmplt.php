<?php
require_once("../user-files/php/config.php");
require_once("php/select.php");

if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    // Perform deletion
    $delete_query = "DELETE FROM inquiry WHERE id = $delete_id";
    mysqli_query($con, $delete_query);
}

$query = "SELECT * FROM inquiry WHERE status = 'completed'";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "
    <tr>
        <td class='dataTitle'>" . htmlspecialchars($row['submission_timestamp']) . "</td>
        <td class='dataTitle'>" . htmlspecialchars($row['date']) . "</td>
        <td class='dataTitle'>" . htmlspecialchars($row['event_type']) . "</td>
        <td class='dataTitle'>" . htmlspecialchars($row['first_name']) . "</td>
        <td class='dataTitle'>" . htmlspecialchars($row['middle_name']) . "</td>
        <td class='dataTitle'>" . htmlspecialchars($row['last_name']) . "</td>
        <td class='dataTitle'>
            <button class='showOtherDetails'>Show</button>
            <dialog class='otherDetailsDialog'>
                <div class='dialogHeader'>
                    <p class='headerCustomerName'>
                        " . htmlspecialchars($row['first_name']) . " " . htmlspecialchars($row['middle_name']) . " " . htmlspecialchars($row['last_name']) . "
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
                        <p class='information'>" . htmlspecialchars($row['email']) . "</p>
                    </div>
                    <div class='detailDivider'>
                        <p class='infoTitle'>Phone Number: &nbsp;</p>
                        <p class='information'>" . htmlspecialchars($row['phone_number']) . "</p>
                    </div>
                    <div class='detailDivider'>
                        <p class='infoTitle'>Event Type: &nbsp;</p>
                        <p class='information'>" . htmlspecialchars($row['event_type']) . "</p>
                    </div>
                    <div class='detailDivider'>
                        <p class='infoTitle'>Package: &nbsp;</p>
                        <p class='information'>" . htmlspecialchars($row['package']) . "</p>
                    </div>
                    <div class='detailDivider'>
                        <p class='infoTitle'>Other Details: &nbsp;</p>
                    </div>
                    <div class='detailDivider'>
                        <div class='otherInformation'>
                            " . htmlspecialchars($row['other_details']) . "
                        </div>
                    </div>
                    <div class='detailDivider'>
                        <p class='infoTitle'>Attachment Sent: &nbsp;</p>
                        <p class='information'>";
                        if (!empty($row['attachment'])) {
                            $attachments = explode(',', $row['attachment']);
                            foreach ($attachments as $attachment) {
                                echo "<a href='http://localhost/dn/uploads/{$attachment}' target='_blank'>{$attachment}</a><br>";
                            }
                        }
                        echo "</p>
                    </div>
                </div>
            </dialog>
        </td>
        <td>
            <form method='post'>
                <input type='hidden' name='delete_id' value='" . $row['id'] . "'>
                <button type='submit' class='deleteButton' onclick='return confirm(\"Are you sure you want to delete this row?\")'>Delete</button>
            </form>
        </td>
    </tr>";
}
?>
