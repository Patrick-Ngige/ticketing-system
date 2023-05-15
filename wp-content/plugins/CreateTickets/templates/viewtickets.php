<?php

global $wpdb;

$table_name = $wpdb->prefix . 'tickets';


$results = $wpdb->get_results("SELECT * FROM $table_name");

if ($results) {
    echo '<table style="margin: 0 auto; width: 80%; background-color:#a2a8d3; border-collapse: collapse;color: white; margin-top: 20px; border-shadow: 2px 2px 2px grey;">';
    echo '<thead>
            <tr>
              <th style="border: 1px solid black; padding: 10px;">Ticket Id</th>
              <th style="border: 1px solid black; padding: 10px;">Ticket Task</th>
              <th style="border: 1px solid black; padding: 10px;">Assignee</th>
              <th style="border: 1px solid black; padding: 10px;">Issued Date</th>
              <th style="border: 1px solid black; padding: 1px;">Action</th>
            </tr>
          </thead>';
    echo '<tbody>';
  

    foreach ($results as $result) { ?>
      <tr>
      <td style="border: 1px solid black; padding: 10px;"> <?php echo $result->ticket_id?></td>
      <td style="border: 1px solid black; padding: 10px;"><?php echo $result->ticket_task?></td>
      <td style="border: 1px solid black; padding: 10px;"><?php echo $result->assignee?></td>
      <td style="border: 1px solid black; padding: 10px;"><?php echo $result->issued_date?></td>
      <td style="border: 1px solid black; padding: 5px;gap:5px;">
                <form method="POST">
                    <input type="hidden" name="ticket_id" value="<?php echo $result->ticket_id ?>"/>
                    <input type="submit" name="delete_ticket" value="Delete"/>
                    <button type="submit" name="edit_ticket">
                    <a href="admin.php?page=edit_ticket&ticket_id=<?php echo $result->ticket_id ?>"><button type="button" name="edit_ticket">Edit</button></a>
                </form>
            </td>
      </tr>
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

?>
 