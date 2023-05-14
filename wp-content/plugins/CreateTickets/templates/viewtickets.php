



<?php

global $wpdb;

$table_name = $wpdb->prefix . 'tickets';


$results = $wpdb->get_results("SELECT * FROM $table_name");


if ($results) {
    echo '<table style="margin: 0 auto; width: 80%; background-color:#a2a8d3; border-collapse: collapse;color: white; margin-top: 20px;">';
    echo '<thead>
            <tr>
              <th style="border: 1px solid black; padding: 10px;">Ticket Id</th>
              <th style="border: 1px solid black; padding: 10px;">Ticket Task</th>
              <th style="border: 1px solid black; padding: 10px;">Assignee</th>
              <th style="border: 1px solid black; padding: 10px;">Issued Date</th>
              <th style="border: 1px solid black; padding: 10px;">Action</th>
            </tr>
          </thead>';
    echo '<tbody>';
  
    foreach ($results as $result) {
      echo '<tr>';
      echo '<td style="border: 1px solid black; padding: 10px;">' . $result->ticket_id . '</td>';
      echo '<td style="border: 1px solid black; padding: 10px;">' . $result->ticket_task . '</td>';
      echo '<td style="border: 1px solid black; padding: 10px;">' . $result->assignee . '</td>';
      echo '<td style="border: 1px solid black; padding: 10px;">' . $result->issued_date . '</td>';
      echo '<td style="border: 1px solid black; padding: 10px;">
                <form method="POST">
                    <input type="hidden" name="ticket_id" value="' . $result->ticket_id . '"/>
                    <input type="submit" name="delete_ticket" value="Delete"/>
                    <input type="submit" name="edit_ticket" value="Edit"/>
                </form>
            </td>';
      echo '</tr>';
    }
  
    echo  '</tbody>';
    echo  '</table>';
  } else {
    echo 'No members found.';
  }

if (isset($_POST['delete_ticket'])) {
    $ticket_id = $_POST['ticket_id'];
    $wpdb->delete($table_name, array('ticket_id' => $ticket_id));
    echo '<script> location.reload(); </script>';
}


if (isset($_POST['edit'])) {
  $ticket_id = $_POST['ticket_id'];
  echo '<script>window.location.href = "createtickets.php";</script>';
  exit;
}

?>
 