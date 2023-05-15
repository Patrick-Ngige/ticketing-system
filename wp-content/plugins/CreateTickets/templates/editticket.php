<!-- <?php
// if (isset($_POST['edit_btn'])) {
//     $id = $_POST['edit_id'];

//     global $wpdb;

//     $table_name = $wpdb->prefix . 'tickets';

//     $data = $wpdb->get_results("SELECT * FROM $table_name WHERE t_id=$id");

//     $ticket = $data[0]; // object retrieved frrom db at index 0
//     echo '<pret>';
//     var_dump($ticket);
//     echo '</pret>';
// }
?>

<div style="width:50%; display:flex; flex-direction:column; justify-content:center; align-items:center; margin-left: 20em; margin-top:1em;">
    <form method="post" style="width:30vw; box-shadow: 2px 2px 2px 2px grey;padding: 2em 3em; line-height: 2em; border-radius: 5px; background-color:#FFFFFF">

        <h1 style="text-align:center;">Edit Ticket</h1>
        <div>
            <label>Ticket Id:</label><br>
            <input type="text" style="width:100%;" value="<?php echo $tickets->t_id; ?>">
        </div>
        <div>
            <label>Ticket Task: </label><br>
            <input type="text" style="width:100%;" value="<?php echo $ticket->task; ?>" name="t_task" required><br>

        </div>
        <div>
            <label>Assignee: </label><br>
            <input type="text" style="width:100%;" value="<?php echo $ticket->assignee; ?>" name="assignee" required><br>

        </div>

        <div>
            <label>Date of Issue: </label><br>
            <input type="date" style="width:100%;" name="issued_date" required><br>

        </div>

        <button type="submit" style="width:100%; background-color:#0071DC; color:white; padding:7px; border-radius: 5px; font-size: 14px; border: none; margin-top:10px;" name="submitbtn">Submit</button>
    </form>
</div>

<?php
// if (isset($_POST['submitbtn'])) {
//     $t_id = $_POST['t_id'];
//     $t_task = $_POST['t_task'];
//     $assignee = $_POST['assignee'];
//     $issued_date = $_POST['issued_date'];

//     $wpdb->update(
//         $table_name,
//         array(
//             't_task' => $t_task,
//             'assignee' => $assignee,
//             'issued_date' => $issued_date
//         ),
//         array('t_id' => $t_id),
//         array('%s', '%s', '%s'),
//         array('%d')
//     );

//     echo '<script>window.location.href = "viewtickets.php";</script>';
//     exit;
// }
?> -->