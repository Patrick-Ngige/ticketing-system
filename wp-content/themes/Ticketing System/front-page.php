<?php 
get_header();

// $user_exists = false;

// if (isset($_POST['loginbtn'])) {
//   $employee_id = $_POST['employee_id'];
//   $password = $_POST['password'];

//   // Does the user exists?
//   $user = get_user_by('login', $employee_id);
//   if ($user && $user->ID) {
//     $user_exists = true;
    // Is the user is an admin?
    // if (in_array('administrator', $user->roles)) {
      // Yes use is admin
      // wp_redirect('http://localhost/ticketing-system/wp-admin/');
      // exit;
    // } else {
      // User exists but  not an admin, 
      // wp_redirect('http://localhost/ticketing-system/ticket/');
      // exit;
    // }
//   }
// }

// User doesn't exist
// wp_redirect('http://localhost/ticketing-system/');

?>


<section style="background-color: #DBDFEA; overflow:hidden;height:94vh; ">
  <div class="container py-5 h-auto">
    <div class="row d-flex justify-content-center align-items-center h-auto">
      <div class="col col-xl-10" style="width:40vw;">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0 w-100 d-flex justify-content-center align-items-center w-50 " style="width:40vw;">
            <div class="row g-0 w-100 d-flex justify-content-center align-items-center w-50 " style="width:40vw;">
              <div class="col-md-6 col-lg-7 d-flex justify-content-center align-items-center  ms-8" style="height:80vh; width:40vw; ">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="" method="POST">

                    <h2 class="fw-bold d-flex align-items-end d-flex justify-content-center align-items-center">Login</h2>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example17">Employee Number</label>
                      <input type="email" id="form2Example17" class="form-control form-control-md" placeholder="Enter employee number" name="employee_id" required />
                    </div>


                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example27">Password</label>
                      <input type="password" id="form2Example27" class="form-control form-control-md" placeholder="Enter password" name="password" required />
                    </div>

                    <div class="pt-1 mb-4 w-100 d-flex justify-content-center align-items-center">
                      <button class="btn btn-dark btn-lg btn-block w-50 " type="button" name="loginbtn"><a href="http://localhost/ticketing-system/tickets/" style="text-decoration:none;color:white">Login</a></button>
                    </div>

                    <p class="mb-2 pb-lg-2 d-flex justify-content-center align-items-center" style="color: #393f81;">Don't have an account? <a href="http://localhost/ticketing-system/signup/" style="color: #393f81;">Register here</a></p>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
