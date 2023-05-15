<?php get_header();

/**
 * Template Name: Signup page
 */

?>

<!-- Section: Design Block -->
<section class="text-center" style="background-color: #DBDFEA;height:90vh;display:flex; justify-content:center;">

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(70px);
        width: 40vw;
        height: 50vh;
        display: flex;
        justify-content: center;
        box-shadow:   0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Sign up now</h2>
          <form>
            <div class="form-outline mb-4">
              <label class="form-label d-flex flex-left" for="form3Example3">Embloyee number</label>
              <input type="email" id="form3Example3" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label d-flex flex-left" for="form3Example4">Password</label>
              <input type="password" id="form3Example4" class="form-control" />
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4 w-50">
              Sign up
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

<?php get_footer(); ?>