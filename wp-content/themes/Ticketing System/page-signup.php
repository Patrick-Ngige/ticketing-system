<?php
// if (is_user_logged_in()) {
//   wp_redirect(home_url());
// }
get_header();

/**
 * Template Name: Signup page
 */

$error = '';

global $wpdb;

if (isset($_POST['registerbtn'])) {
  $info = [
    'user_email' => $_POST['user_mail'],
    'user_login' => $_POST['employee_id'],
    'user_pass' => $_POST['password'],
    'role' => 'Subscriber'

  ];


  $user = wp_insert_user( $info ) ;

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
          <h2 class="fw-bold mb-5">Sign up now</h2>


          <form action="http://localhost/ticketing-system/" method="POST">
            <div class="form-outline mb-4">
              <label class="form-label d-flex flex-left" for="form3Example3">Employee number</label>
              <input type="text" id="form3Example3" class="form-control" placeholder="Enter employee number" name="employee_id" required />
            </div>
            <div class="form-outline mb-4">
              <label class="form-label d-flex flex-left" for="form3Example3">Email</label>
              <input type="email" id="form3Example3" class="form-control" placeholder="Enter email" name="user_mail" required />
            </div>


            <div class="form-outline mb-4">
              <label class="form-label d-flex flex-left" for="form3Example4">Password</label>
              <input type="password" id="form3Example4" class="form-control" placeholder="Enter employee password" name="password" required />
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