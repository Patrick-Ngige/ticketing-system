<?php
if (isset($_POST['loginbutton'])) {
    // Form has been submitted
    // echo '<script>alert("clicked")</script>';

   // Check if the form fields are set
    if (isset($_POST['employee_id']) && isset($_POST['password'])) {

      // Retrieve the form data
        $employeeId = $_POST['employee_id'];
        $password = $_POST['password'];

        global $wpdb;

        $username = $wpdb->get_row("SELECT username from {$wpdb->prefix}members WHERE employee_id='$employeeId'");

        // var_dump($username->username);

        $pwd = $wpdb->get_row("SELECT `password` from {$wpdb->prefix}members WHERE employee_id='$employeeId'");

        // var_dump($pwd->password);

        if ($username){

          if($password == $pwd->password){

            $current_assignee = $username->username;
            var_dump($current_assignee);
            

            setcookie("currentassignee", $current_assignee, time()+3600, "/ticketing-system/tickets","", 0);
            // echo $_COOKIE["currentassignee"]. "<br />";

            // var_dump($current_user);

            wp_redirect('/ticketing-system/tickets');
          }else{
            echo '<script>alert("Password mismatch")</script>';
          }
        }else{
          echo '<script>alert("User not found")</script>';
        }

    } else {
        echo "Please fill in all the required fields.";
    }
}
?>

<?php 
get_header();

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
                      <input type="text" id="form2Example17" class="form-control form-control-md" placeholder="Enter employee number" name="employee_id"  />
                    </div>


                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example27">Password</label>
                      <input type="password" id="form2Example27" class="form-control form-control-md" placeholder="Enter password" name="password"  />
                    </div>

                    <div class="pt-1 mb-4 w-100 d-flex justify-content-center align-items-center">
                      <button class="btn btn-dark btn-lg btn-block w-50 " type="submit" name="loginbutton">Login</button>
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
