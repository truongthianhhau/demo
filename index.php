<?php
include_once('view/header.php'); ?>

<!-- HOME -->
<section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-12">
        <div class="mb-5 text-center">
          <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate est, consequuntur perferendis.</p>
        </div>
        <form method="post" class="search-jobs-form" action="./index.php#next">
          <div class="row mb-5">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <input value="<?php if (isset($_SESSION['searchJob'])) echo $_SESSION['searchJob'] ?>" type="text" name="searchJob" class="form-control form-control-lg" placeholder="Job title, Company...">
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <select name="searchRegion" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region">
                <?php
                echo "<option ></option>";
                $query = "SELECT DISTINCT(JobRegion) FROM job";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {
                  if ($_SESSION['searchRegion'] == $row['JobRegion']) {
                    echo "<option value='" . $row['JobRegion'] . "' selected='selected'>" . $row['JobRegion'] . "</option>";
                  } else {
                    echo "<option value='" . $row['JobRegion'] . "'>" . $row['JobRegion'] . "</option>";
                  }
                }
                ?>
              </select>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <select name="searchType" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
                <?php
                echo "<option ></option>";
                $query = "SELECT DISTINCT(JobType) FROM job";
                $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {
                  if ($_SESSION['searchType'] == $row['JobType']) {
                    echo "<option value='" . $row['JobType'] . "' selected='selected'>" . $row['JobType'] . "</option>";
                  } else {
                    echo "<option value='" . $row['JobType'] . "'>" . $row['JobType'] . "</option>";
                  }
                }
                ?>
              </select>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
              <button type="submit" name="search" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 popular-keywords">
              <h3>Trending Keywords:</h3>
              <ul class="keywords list-unstyled m-0 p-0">
                <li><a href="#" class="">UI Designer</a></li>
                <li><a href="#" class="">Python</a></li>
                <li><a href="#" class="">Developer</a></li>
              </ul>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <a href="#next" class="scroll-button smoothscroll">
    <span class=" icon-keyboard_arrow_down"></span>
  </a>

</section>

<section class="site-section" id="next">
  <div class="container">
    <ul class="job-listings mb-5">

      <?php include './search.php'; ?>

    </ul>

    <div class="row pagination-wrap">
      <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
        <span><?php echo 'Showing 1-10 Of ' . $Job_Listed . ' Jobs'; ?></span>
      </div>
      <div class="col-md-6 text-center text-md-right">
        <div class="custom-pagination ml-auto">
          <a href="#" class="prev">Prev</a>
          <div class="d-inline-block">
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
          </div>
          <a href="#" class="next">Next</a>
        </div>
      </div>
    </div>

  </div>
</section>
<?php if (empty($fullnamne)) { ?>
  <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8">
          <h2 class="text-white">Looking For A Job?</h2>
          <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
        </div>
        <div class="col-md-3 ml-auto">
          <a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
        </div>
      </div>
    </div>
  </section>
<?php } ?>


<section class="site-section py-4">
  <div class="container">

    <div class="row align-items-center">
      <div class="col-12 text-center mt-4 mb-5">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <h2 class="section-title mb-2">Company We've Helped</h2>
            <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit mollitia ipsum facilis expedita tempora suscipit iste</p>
          </div>
        </div>

      </div>
      <div class="col-6 col-lg-3 col-md-6 text-center">
        <img src="images/logo_mailchimp.svg" alt="Image" class="img-fluid logo-1">
      </div>
      <div class="col-6 col-lg-3 col-md-6 text-center">
        <img src="images/logo_paypal.svg" alt="Image" class="img-fluid logo-2">
      </div>
      <div class="col-6 col-lg-3 col-md-6 text-center">
        <img src="images/logo_stripe.svg" alt="Image" class="img-fluid logo-3">
      </div>
      <div class="col-6 col-lg-3 col-md-6 text-center">
        <img src="images/logo_visa.svg" alt="Image" class="img-fluid logo-4">
      </div>

      <div class="col-6 col-lg-3 col-md-6 text-center">
        <img src="images/logo_apple.svg" alt="Image" class="img-fluid logo-5">
      </div>
      <div class="col-6 col-lg-3 col-md-6 text-center">
        <img src="images/logo_tinder.svg" alt="Image" class="img-fluid logo-6">
      </div>
      <div class="col-6 col-lg-3 col-md-6 text-center">
        <img src="images/logo_sony.svg" alt="Image" class="img-fluid logo-7">
      </div>
      <div class="col-6 col-lg-3 col-md-6 text-center">
        <img src="images/logo_airbnb.svg" alt="Image" class="img-fluid logo-8">
      </div>
    </div>
  </div>
</section>


<section class="bg-light pt-5 testimony-full">

  <div class="owl-carousel single-carousel">


    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center text-center text-lg-left">
          <blockquote>
            <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
            <p><cite> &mdash; Corey Woods, @Dribbble</cite></p>
          </blockquote>
        </div>
        <div class="col-lg-6 align-self-end text-center text-lg-right">
          <img src="images/person_transparent_2.png" alt="Image" class="img-fluid mb-0">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center text-center text-lg-left">
          <blockquote>
            <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
            <p><cite> &mdash; Chris Peters, @Google</cite></p>
          </blockquote>
        </div>
        <div class="col-lg-6 align-self-end text-center text-lg-right">
          <img src="images/person_transparent.png" alt="Image" class="img-fluid mb-0">
        </div>
      </div>
    </div>

  </div>

</section>

<section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
        <h2 class="text-white">Get The Mobile Apps</h2>
        <p class="mb-5 lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
        <p class="mb-0">
          <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-apple mr-3"></span>App Store</a>
          <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-android mr-3"></span>Play Store</a>
        </p>
      </div>
      <div class="col-md-6 ml-auto align-self-end">
        <img src="images/apps.png" alt="Free Website Template by Free-Template.co" class="img-fluid">
      </div>
    </div>
  </div>
</section>
<?php
include_once('view/footer.php'); ?>