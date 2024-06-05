<?php
require_once("../user-files/php/config.php");
require_once("php/select.php");

if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];

    // Delete corresponding row from feedback_ctrl table
    $delete_feedback_ctrl_query = "DELETE FROM feedback_ctrl WHERE id = $delete_id";
    mysqli_query($con, $delete_feedback_ctrl_query);

    // Perform deletion from customers_feedback table
    $delete_query = "DELETE FROM customers_feedback WHERE id = $delete_id";
    mysqli_query($con, $delete_query);
}

$query = "SELECT * FROM customers_feedback";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "
    <tr class='feedback-row' data-id='{$row['id']}' data-state='{$row['state']}'>
        <td class='dataTitle'>
            <textarea name='' class='inputTable' readonly>{$row['date']}</textarea>
        </td>
        <td class='dataTitle'>
            <textarea name='' class='inputTable' readonly>{$row['rate']}</textarea>
        </td>
        <td class='dataTitle'>
            <textarea name='' class='inputTable' readonly>{$row['name']}</textarea>
        </td>
        <td class='dataTitle'>
            <textarea name='' class='textareaTable' readonly>{$row['comments']}</textarea>
        </td>
        <td>
            <button class='showButton' data-id='{$row['id']}' style='" . ($row['state'] == 1 ? 'display:none;' : '') . "'>SHOW</button>
            <button class='hideButton' data-id='{$row['id']}' style='" . ($row['state'] == 0 ? 'display:none;' : '') . "'>HIDE</button>
        </td>
        <td>
            <form method='post' onsubmit='return confirm(\"Are you sure you want to delete this row?\");'>
                <input type='hidden' name='delete_id' value='{$row['id']}'>
                <button type='submit' class='deleteButton'>Delete</button>
            </form>
        </td>
    </tr>";
}
?>
