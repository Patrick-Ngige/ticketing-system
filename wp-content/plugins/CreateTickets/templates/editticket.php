<?php
$ticket_id = $_GET['ticket_id'];

// var_dump($ticket_id);

global $wpdb;
$table = $wpdb->prefix . 'tickets';

$data = $wpdb->get_results("SELECT * FROM wp_tickets WHERE ticket_id = '$ticket_id'");

?>
					
<div style="width:50%; display:flex; flex-direction:column; justify-content:center; align-items:center; margin-left: 20em; margin-top:1em;">
    <form method="post" style="width:30vw; box-shadow: 2px 2px 2px 2px grey;padding: 2em 3em; line-height: 2em; border-radius: 5px; background-color:#FFFFFF">

        <h1 style="text-align:center;">Edit Ticket</h1>

        <?php foreach ($data as $ticket) : ?>
            <div>
                <label>Ticket Id:</label><br>
                <input type="text" style="width:100%;" value="<?php echo $ticket->ticket_id; ?>" name="edt_id" required>
            </div>
            <div>
                <label>Username:</label><br>
                <input type="text" style="width:100%;" value="<?php echo $ticket->user_login; ?>" name="edt_user_login" required>
            </div>
            <div>
                <label>Ticket Task: </label><br>
                <input type="text" style="width:100%;" value="<?php echo $ticket->ticket_task; ?>" name="edt_task" required><br>
            </div>
            <div>
                <label>Assignee: </label><br>
                <input type="text" style="width:100%;" value="<?php echo $ticket->assignee; ?>" name="edt_assignee" required><br>
            </div>
            <div>
                <label>Date of Issue: </label><br>
                <input type="date" style="width:100%;" value="<?php echo $ticket->issued_date; ?>" name="edt_issued_date" required><br>
            </div>
            <button type="submit" style="width:100%; background-color:#0071DC; color:white; padding:7px; border-radius: 5px; font-size: 14px; border: none; margin-top:10px;" name="update">Update</button>
        <?php endforeach; ?>

    </form>
</div>
