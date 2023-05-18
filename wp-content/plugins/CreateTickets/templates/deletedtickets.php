<?php
global $wpdb;

$table = $wpdb->prefix . 'tickets';
$deleted_tickets = $wpdb->get_results("SELECT * FROM $table WHERE deleted=1");

if ($deleted_tickets) { ?>
    <table class="table table-striped"
        style="margin: 0 auto; width: 80%;  border-collapse: collapse;color: black; margin-top: 20px; box-shadow: 2px 2px 2px grey;">
        <thead>
            <tr>
                <th style="border: 1px solid black; padding: 10px;">Ticket Id</th>
                <th style="border: 1px solid black; padding: 10px;">Ticket Task</th>
                <th style="border: 1px solid black; padding: 10px;">Assignee</th>
                <th style="border: 1px solid black; padding: 10px;">Issued Date</th>
                <th style="border: 1px solid black; padding: 10px;">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($deleted_tickets as $deleted) { ?>
                <tr>
                    <td style="border: 1px solid black; padding: 10px;">
                        <?php echo $deleted->ticket_id ?>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;">
                        <?php echo $deleted->ticket_task ?>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;">
                        <?php echo $deleted->assignee ?>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;">
                        <?php echo $deleted->issued_date ?>
                    </td>

                    <td style="border: 1px solid black; padding: 5px;gap:5px;">
                        <form method="POST">
                            <input type="hidden" name="ticket_id" value="<?php echo $deleted->ticket_id; ?>" />
                            <button class="restore-btn" name="restore" type="submit"
                                style="background-color: #006b0c;color:white; border-radius:3px;text-decoration:none;padding:5px;border: #006b0c;border-radius:3px;">
                                Restore</button>
                    </td>

                </tr>
                </form>
                </td>

            <?php } ?>

        </tbody>
    </table>

<?php } else {
    echo 'No tickets found.';
}


global $wpdb;
global $success_msg;
global $error_msg;

$table_name = $wpdb->prefix . 'tickets';

if (isset($_POST['restore'])) {
    $data = ['deleted' => 0];
    $condition = ['ticket_id' => $_POST['ticket_id']];

    $results = $wpdb->update($table_name, $data, $condition);
    echo '<script> location.reload(); </script>';

    if ($results) {
        $success_msg = "Ticked restored successfully";
    } else {
        $error_msg = "Error restoring ticket";
    }
}



?>