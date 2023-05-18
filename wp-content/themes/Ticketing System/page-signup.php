<?php

get_header();

/**
 * Template Name: Signup page
 */



global $wpdb;

$table_name = $wpdb->prefix . 'members';

$wpdb->show_errors(); 

$fields = "CREATE TABLE IF NOT EXISTS " . $table_name . " (
            employee_id text NOT NULL ,
            username text NOT NULL,
            email text NOT NULL,
            password varchar(200),
            PRIMARY KEY(employee_id(10))          
);";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($fields);

  global $wpdb;

  $table_name = $wpdb->prefix . 'members';

  if (isset($_POST['registerbtn'])) {
    $info = [
      'employee_id' => $_POST['employee_id'],
      'username' => $_POST['username'],
      'email' => $_POST['email'],
      'password' => $_POST['password'],
    ];

    $dummy = $wpdb->insert($table_name, $info);
  //   if ($dummy !== false) {
  //     wp_redirect('http://localhost/ticketing-system/');
  //     exit;
  // }
}

?>

<section class="text-center" style="background-color: #DBDFEA;display:flex; justify-content:center;height:95vh;">

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(70px);
        width: 40vw;
        height:fit-content;
        margin-top: 1em;
        border-radius: 20px;
        display: flex;
        justify-content: center;
       
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-2">Sign up now</h2>


          <form action="" method="POST">
            <div class="form-outline mb-4">
              <label class="form-label d-flex flex-left" for="form3Example3">Employee number</label>
              <input type="text" id="form3Example3" class="form-control" placeholder="Enter employee number"
                name="employee_id" required />
            </div>

            <div class="form-outline mb-4">
              <label class="form-label d-flex flex-left" for="form3Example3">Username </label>
              <input type="text" id="form3Example3" class="form-control" placeholder="Enter employee number"
                name="username" required />
            </div>

            <div class="form-outline mb-4">
              <label class="form-label d-flex flex-left" for="form3Example3">Email</label>
              <input type="email" id="form3Example3" class="form-control" placeholder="Enter email" name="email"
                required />
            </div>


            <div class="form-outline mb-4">
              <label class="form-label d-flex flex-left" for="form3Example4">Password</label>
              <input type="password" id="form3Example4" class="form-control" placeholder="Enter employee password"
                name="password" required />
            </div>


            <div class="pt-1 mb-2 w-100">
              <button class="btn btn-dark btn-lg btn-block w-50" type="submit" name="registerbtn">Register</button>
            </div>
            <!-- <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="http://localhost/ticketing-system/" style="color: #393f81;">Login</a></p> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</section>