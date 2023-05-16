<?php
get_header();

if (is_user_logged_in()) {
    global $wpdb;
    $current_user = wp_get_current_user();
    $username = $current_user->user_login;

    // Retrieve information from the tickets table
    $table_name = $wpdb->prefix . 'tickets';
    $tickets = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE user_login = %s", $username));

    // var_dump($tickets);

    if ($tickets) {
        foreach ($tickets as $ticket) {
            ?>
            <div style="display:flex; justify-content:center; background-color:#DBDFEA;height:94vh;">
            <div class="card w-50 d-flex justify-content-center " style="height: fit-content; margin-top:10vh;" >
                <div class="card-header">
                   <h2><?php echo  $ticket->user_login; ?></h2> 
                </div>
                <div class="card-body" style="display:flex; flex-direction: column;">
                    <p class="card-text" style="display:flex; flex-direction: row;"></p><h5>Ticket ID:</h5> <?php echo $ticket->ticket_id; ?></p>
                    <p class="card-text"><h5>Task:</h5><?php echo $ticket->ticket_task; ?></p>
                    <p class="card-text"><h5>Assignee:</h5></p><?php echo $ticket->assignee; ?></p>
                    <p class="card-text"><h5>Date:</h5></p><?php echo $ticket->issued_date; ?></p>
                </div>
            </div>
            </div>
            <?php
        }
    } else {
        echo "No pending ticket for the user.";
    }
} else {
    echo "Please log in to view the tickets.";
}
?>
