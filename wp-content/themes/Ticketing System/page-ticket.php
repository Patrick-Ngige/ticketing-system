<?php
get_header();

// if (is_user_logged_in()) {


global $wpdb;
$current_assignee = $_COOKIE['currentassignee'];
// $current_user = wp_get_current_user();
// $username = $current_user->assignee;

$tickets = $wpdb->prefix . 'tickets';
$members = $wpdb->prefix . 'members';

$query = $wpdb->prepare(
    "SELECT * FROM wp_tickets WHERE assignee = '$current_assignee'"
);


$results = $wpdb->get_row($query);

// var_dump($results);

//  foreach ($results as $ticket) { ?>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <div class="container " styles="background-color:#DBDFEA ">
        <section class="section mb-5">
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
                    <div class="row gy-4 justify-content-center">


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
                        <button class=" ps-3 col btn btn-primary flex-shrink-0" type="submit">Mark Complete</button>
                        <form class="d-flex flex-column flex-md-row mt-4"><input type="email"
                                class="form-control me-sm-2 mb-2 mb-sm-0" placeholder="you@yoursite.com"> </form>
                    </div>
                </div>
            </section>
        </div>

 <?php
//  };
// }
 ?>

<!-- // } else {
//     wp_redirect('http://localhost/ticketing-system/');
// } -->