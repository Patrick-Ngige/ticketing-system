<?php get_header();?>

<section  style="background-color: #DBDFEA; overflow:hidden;height:94vh;   box-shadow:   0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;">
  <div class="container py-5 h-auto" >
    <div class="row d-flex justify-content-center align-items-center h-auto" >
      <div class="col col-xl-10" style="width:40vw;">
        <div class="card" style="border-radius: 1rem;" >
          <div class="row g-0 w-100 d-flex justify-content-center align-items-center w-50 " style="width:40vw;" >
          <div class="row g-0 w-100 d-flex justify-content-center align-items-center w-50 " style="width:40vw;" >
            <div class="col-md-6 col-lg-7 d-flex justify-content-center align-items-center  ms-8" style="height:80vh;width:40vw;" >
              <div class="card-body p-4 p-lg-5 text-black">

                <form>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold d-flex align-items-center">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">Employee Number</label>
                    <input type="email" id="form2Example17" class="form-control form-control-md" placeholder="Enter Employee number"/>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" id="form2Example27" class="form-control form-control-md" placeholder="Enter Password" />
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="http://localhost/ticketing-system/signup/"
                      style="color: #393f81;">Register here</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>