<?php get_header();


global $wpdb;
$current_assignee = $_COOKIE['currentassignee'];

$tickets = $wpdb->prefix . 'tickets';
$members = $wpdb->prefix . 'members';

$query = $wpdb->prepare(
    "SELECT * FROM wp_tickets WHERE assignee = '$current_assignee'"
);

$results = $wpdb->get_row($query);


?>

<?php if ($results->ticket_status == 0) { ?>
    <div class="card d-flex mt-5 " style="justify-content: center; width:50vw;background-color:#7D8C92;color:#FAFAFA;margin-left:25vw;">
        <h3 class="card-header" style="background-color: #204657;color:#FAFAFA">
            <?php echo $results->assignee; ?>
        </h3>
        <div class="card-body">
            <h6 class="card-title"><span style="color: rgb(13,12,12)">Ticket ID:</span>
                <?php echo $results->ticket_id; ?>
            </h6>
            <p class="card-text"><span style="color: rgb(13,12,12)">Task:</span><?php echo $results->ticket_task; ?></p>
            <p class="card-text"><span style="color: rgb(13,12,12)">Date:</span> <?php echo $results->issued_date; ?></p>
            
            <form method="post" action="" style="padding:1rem;">
                <input type="submit" class="btn w-50" style="width:fit-content;background-color:#204657;color:#FAFAFA"
                    name="markcomplete" value="Complete ">
            </form>
        </div>
    </div>
<?php
} else { ?>

<div class="card d-flex mt-5 " style="justify-content: center; width:50vw;background-color:#7D8C92;color:#FAFAFA;margin-left:25vw;">
        <h3 class="card-header" style="background-color: #204657;color:#FAFAFA">
            <?php echo $results->assignee; ?>
        </h3>
        <div class="card-body">
            <h6 class="card-title">No ticket assigned
            </h6>
           
           
            
        </div>
    </div>
<?php }
?>




<?php
global $wpdb;
global $success_msg;
global $error_msg;

$table_name = $wpdb->prefix . 'tickets';
global $wpdb;
$current_assignee = $_COOKIE['currentassignee'];

$tickets = $wpdb->prefix . 'tickets';
$members = $wpdb->prefix . 'members';

if (isset($_POST['markcomplete'])) {
    $data = ['ticket_status' => 1];
    global $wpdb;
    global $success_msg;
    global $error_msg;

    $table_name = $wpdb->prefix . 'tickets';
    global $wpdb;

    $updated = $wpdb->update($table_name, $data, array("assignee" => $current_assignee));

    if ($updated) {
        $success_msg = "Ticket marked as complete successfully";
    } else {
        $error_msg = "Ticket completion failed";
    }
}

get_footer();
?>