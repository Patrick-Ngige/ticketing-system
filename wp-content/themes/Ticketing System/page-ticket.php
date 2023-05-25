<?php
get_header();


global $wpdb;
$current_assignee = $_COOKIE['currentassignee'];

$tickets = $wpdb->prefix . 'tickets';
$members = $wpdb->prefix . 'members';

$query = $wpdb->prepare(
    "SELECT * FROM wp_tickets WHERE assignee = '$current_assignee'"
);

$results = $wpdb->get_row($query);

 ?>

 
    <div class="container " >
        <section class="section mb-5 " >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7 text-center desc">
                            <h2 class="h1 mb-3">
                                <?php echo $results->assignee; ?>
                            </h2>
                            <p class="mx-lg-8">Welcome
                                <?php echo $results->assignee; ?>, Kindly find your ticket below and finish it before the
                                deadline. Thank you and Good Luck with your ticket.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section pt-0">
                <div class="container">
                    <div class="row gy-4 justify-content-center" >


                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body d-flex">

                                    <div class="ps-3 col">
                                        <h5 class="h6 mb-2"><a class="stretched-link text-reset" style="text-decoration:none;"
                                                href="#">
                                                <?php echo $results->ticket_id; ?>
                                            </a></h5>
                                        <p class="m-0">This is the ID of the ticket allocated to you by the administrator. Mark
                                            it complete when you are done.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body d-flex">

                                    <div class="ps-3 col">
                                        <h5 class="h6 mb-2"><a class="stretched-link text-reset" style="text-decoration:none;"
                                                href="#">
                                                <?php echo $results->ticket_task; ?>
                                            </a></h5>
                                        <p class="m-0">From the current observations, a user raised concern on "
                                            <?php echo $results->ticket_task; ?> ". Solve the issue as soon as possible.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body d-flex">

                                    <div class="ps-3 col">
                                        <h5 class="h6 mb-2"><a class="stretched-link text-reset" style="text-decoration:none;"
                                                href="#">
                                                <?php echo $results->issued_date; ?>
                                            </a></h5>
                                        <p class="m-0">The tiicket was issued on this date. As the company policy, you have to
                                            finish within 3 days of issue.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body d-flex">

                                    <div class="ps-3 col">
                                        <h5 class="h6 mb-2"><a class="stretched-link text-reset" style="text-decoration:none;"
                                                href="#">Summary</a></h5>
                                        <p class="m-0">
                                            <?php echo $results->ticket_id; ?> <br>
                                            <?php echo $results->ticket_task; ?><br>
                                            <?php echo $results->ticket_status; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body d-flex">

                                    <div class="ps-3 col">
                                        <h5 class="h6 mb-2"><a class="stretched-link text-reset" style="text-decoration:none;"
                                                href="#">
                                                <?php echo $results->ticket_status; ?>
                                            </a></h5>
                                        <p class="m-0">This shows the status of your ticket name, when you are done and checked
                                            complete, the ticket will disappear</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="">
                        <input type="submit" class=" btn btn-primary w-50 " style="display:flex; justify-content: center; " name="markcomplete" value="Mark Complete"></input>
                        </form>
                      
                    </div>
                </div>
            </section>
        </div>

 <?php
global $wpdb;
global $success_msg;
global $error_msg;

$table_name = $wpdb->prefix . 'tickets';
global $wpdb;
$current_assignee = $_COOKIE['currentassignee'];
// var_dump($current_assignee);

$tickets = $wpdb->prefix . 'tickets';
$members = $wpdb->prefix . 'members';

// $query = $wpdb->prepare(
//     "SELECT ticket_id FROM wp_tickets WHERE assignee = '$current_assignee'"
// );



if (isset($_POST['markcomplete'])) {
  $data = ['ticket_status' => 1];
 
  global $wpdb;
global $success_msg;
global $error_msg;

$table_name = $wpdb->prefix . 'tickets';
global $wpdb;
  
  $deleted = $wpdb->update($table_name, $data, array(" assignee = '$current_assignee'"));
  var_dump($deleted);
  echo '<script> location.reload(); </script>';

  if ($deleted) {
      $success_msg = "Ticked marked successfully";
  } else {
      $error_msg = "Not completed";
  }
}
