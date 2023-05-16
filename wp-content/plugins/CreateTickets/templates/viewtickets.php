<?php

global $wpdb;

$table_name = $wpdb->prefix . 'tickets';


$results = $wpdb->get_results("SELECT * FROM $table_name");

if ($results) {
  echo '<table class="table table-striped" style="margin: 0 auto; width: 80%;  border-collapse: collapse;color: black; margin-top: 20px; border-shadow: 2px 2px 2px grey;">';
  echo '<thead>
            <tr>
              <th style="border: 1px solid black; padding: 10px;">Ticket Id</th>
              <th style="border: 1px solid black; padding: 10px;">Username</th>
              <th style="border: 1px solid black; padding: 10px;">Ticket Task</th>
              <th style="border: 1px solid black; padding: 10px;">Assignee</th>
              <th style="border: 1px solid black; padding: 10px;">Issued Date</th>
              <th style="border: 1px solid black; padding: 10px;">Action</th>
            </tr>
          </thead>';
  echo '<tbody>';


  foreach ($results as $result) { ?>
    <tr>
      <td style="border: 1px solid black; padding: 10px;"> <?php echo $result->ticket_id ?></td>
      <td style="border: 1px solid black; padding: 10px;"> <?php echo $result->user_login ?></td>
      <td style="border: 1px solid black; padding: 10px;"><?php echo $result->ticket_task ?></td>
      <td style="border: 1px solid black; padding: 10px;"><?php echo $result->assignee ?></td>
      <td style="border: 1px solid black; padding: 10px;"><?php echo $result->issued_date ?></td>
      <!-- <td style="border: 1px solid black; padding: 10px;"><?php //echo $result->status ?></td> -->

      <td style="border: 1px solid black; padding: 5px;gap:5px;">
        <form method="POST">
          <input type="hidden" name="ticket_id" value="<?php echo $result->ticket_id ?>" />
          <input type="submit" name="delete_ticket" value="Delete" style="background-color: #fd434c;color:white; border-radius:3px;padding:5px;border:none;" />
          <a href="admin.php?page=edit_ticket&ticket_id=<?php echo $result->ticket_id ?>"><button type="button" name="edit_ticket" style="background-color: #006b0c;color:white; border-radius:3px;padding:5px;border:none;">Edit</button></a>
          <!-- <a href="<?php //echo esc_url(add_query_arg('ticket_id',$result->ticket_id,'admin.php?page=edit_ticket'))
                        ?>">UPDATE</a> -->
    </tr>
    </form>
    </td>

  <?php }  ?>

  </tbody>
  </table>
<?php } else {
  echo 'No tickets found.';
}



 if (isset($_POST['delete_ticket'])) {
     $ticket_id = $_POST['ticket_id'];
    $wpdb->delete($table_name, array('ticket_id' => $ticket_id));
    echo '<script> location.reload(); </script>';
 }


// if (isset($_POST['delete_ticket'])) {
//   $ticket_id = $_POST['ticket_id'];

//   // Assuming you have a 'deleted' column in your table to mark the record as deleted
//   $wpdb->update($table_name, array('status' => true), array('ticket_id' => $ticket_id));

//   echo '<script> location.reload(); </script>';
// }

?>