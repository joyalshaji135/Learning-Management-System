<?php

include('./include/connection.php');

session_start();
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LearnUpon</title>
  <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
  <!--/google-fonts-->
  <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
  <!--//google-fonts-->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">

</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark stroke">
        <h1><a class="navbar-brand" href="index.php">
          Learn<span class="sub-log">U</span>pon
          </a></h1>
        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.php">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <nav class="mr-auto ml-lg-5">
            <div class="search-bar">
              <form class="search">
                <input type="search" class="search__input" name="search" placeholder="Search for Courses.."
                  onload="equalWidth()" required>
                <span class="fa fa-search search__icon"></span>
              </form>
            </div>
          </nav>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Courses</a>
            </li>
            <?php
				if(!isset($_SESSION['client_username']))
				{
				  echo "
                      <li class='nav-item'>
                          <a class='nav-link' href='./registration.php'>Registration</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link' href='./login_redirection.php'>Login</a>
                      </li>
                  ";
				}
                else
				{
                  $client_username = $_SESSION['client_username'];
				  echo "
                    <li class='nav-item'>
                        <a class='nav-link' href='./account_setting.php'>Account Settings</a>
                    </li>
                    <li class='nav-item'>
                      <a class='nav-link' href='./logout.php'>Logout</a>
                    </li>
                  ";
				}
			?>

            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
        <!-- toggle switch for light and dark theme -->

        <!-- <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container py-1">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div> -->
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!--/header-->
  <div class="inner-banner">
    <section class="w3l-breadcrumb text-left">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Account : 
                <?php echo $client_username ?>
        </li>
        </ul>
      </div>
    </section>
  </div>
  <!-- about page about section -->

  <section class="w3l-index3" id="about1">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3">
        <div class="row">
          <div class="col-lg-6 mb-lg-0 mb-md-5 mb-4">
            <img src="assets/images/ab1.jpg" alt="" class="radius-image-full img-fluid">
          </div>
          <div class="col-lg-6 pl-lg-5 ">
            <div class="header-title">
              <span class="sub-title">About Us</span>
              <h3 class="hny-title text-left">Learn at Your Own Place</h3>
            </div>

            <p class="mt-3">Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
              consectetur adipisicing.Nunc id ipsum fringilla, gravida felis vitae. lacinia id, sunt in
              culpa quis lacinia. Lorem ipsum dolor, sit amet init elit. Eos,
              debitis. Quas minima sunt natus tempore.</p>
            <a href="#" class="btn btn-style btn-primary mt-sm-5 mt-4">Read More <span class="fa fa-chevron-right ml-2"
                aria-hidden="true"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /bottom-grids-->
  <section class="w3l-servicesblock py-5" id="about">
    <div class="container py-lg-5 py-md-3">
      <div class="row">
        <div class="col-lg-6 about-right-faq align-self mb-lg-0 mb-sm-5 mb-4 pr-lg-5">
          <div class="header-title mb-md-5 mb-4">
            <span class="sub-title">Why Choose Us</span>
            <h3 class="hny-title text-left">Educating Champions of a Just and Sustainable World.

            </h3>
          </div>
          <div class="two-grids mt-md-0 mt-md-5 mt-4">
            <div class="grids_info">
              <h4>Our Mission</h4>
              <p class="">Pellen tesque libero ut justo,
                ultrices in ligula.</p>
            </div>
            <div class="grids_info">
              <h4>Our Vision</h4>
              <p class="">Pellen tesque libero ut justo,
                ultrices in ligula.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 left-wthree-img mt-lg-0 mt-4">
          <img src="assets/images/ab4.jpg" alt="" class="img-fluid radius-image">
        </div>


      </div>
    </div>
  </section>
  <!-- home page skills section -->
  <section class="w3l-skills" id="skills">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3">
        <div class="row">
          <div class="col-lg-6 pr-lg-5 mb-lg-0 mb-5">
            <img src="assets/images/ab5.jpg" alt="" class="radius-image-full img-fluid">
          </div>
          <div class="col-lg-6">
            <div class="header-title mb-4">
              <span class="sub-title">Our Skills</span>
              <h3 class="hny-title text-left">Enhance your skIlls wIth best OnlIne courses

              </h3>
            </div>

            <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
              ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet elit. </p>
            <div class="skills-bars mt-4">
              <div class="progress-info">
                <h6 class="progress-tittle">Finance</h6>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>
              <div class="progress-info">
                <h6 class="progress-tittle">Marketing
                </h6>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
                    aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>
              <div class="progress-info">
                <h6 class="progress-tittle">Business</h6>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 55%"
                    aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!-- //home page skills section -->
  <!-- /form-25-section -->
  <section class="w3l-form-25-section" id="subscribe">
    <!-- /form-25-section -->
    <div class="form-25-mian">
      <div class="container py-5">
        <div class="row subscription-grids py-5">
          <div class="col-lg-7 subscription-left forms-25-info">
            <div class="header-title">
              <h3 class="p-0">The greatest choice of courses
              </h3>
            </div>
          </div>
          <div class="col-lg-5 subscription-right pl-lg-5 mt-lg-0 mt-4 text-lg-right">
            <a href="about.php" class="btn btn-style btn-white mr-lg-4 mr-sm-3"> Join Now <span
                class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
          </div>
        </div>
      </div>
  </section>
  <!-- //form-25-section -->

  <!--/team-sec-->
  <section class="w3l-team-main" id="team">
    <div class="team py-5">
      <div class="container py-lg-5">
        <div class="header-title mb-4">
          <span class="sub-title">Our Team</span>
          <h3 class="hny-title text-left">Popular Instructors
          </h3>
        </div>
        <div class="row team-row ">
          <div class="col-lg-3 col-6 team-wrap mt-lg-5 mt-4">
            <div class="team-member text-center">
              <div class="team-img">
                <img src="assets/images/team1.jpg" alt="" class="radius-image">
                <div class="overlay-team">
                  <div class="team-details text-center">
                    <div class="socials mt-20">
                      <a href="#url">
                        <span class="fa fa-facebook-f"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-twitter"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-instagram"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#url" class="team-title">Daniel jacobs</a>
              <p>Instructor</p>
            </div>
          </div>
          <!-- end team member -->

          <div class="col-lg-3 col-6 team-wrap mt-lg-5 mt-4">
            <div class="team-member text-center">
              <div class="team-img">
                <img src="assets/images/team3.jpg" alt="" class="radius-image">
                <div class="overlay-team">
                  <div class="team-details text-center">
                    <div class="socials mt-20">
                      <a href="#url">
                        <span class="fa fa-facebook-f"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-twitter"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-instagram"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#url" class="team-title">Claire Daniel</a>
              <p>Instructor</p>
            </div>
          </div>
          <!-- end team member -->

          <div class="col-lg-3 col-6 team-wrap mt-lg-5 mt-4">
            <div class="team-member last text-center">
              <div class="team-img">
                <img src="assets/images/team2.jpg" alt="" class="radius-image">
                <div class="overlay-team">
                  <div class="team-details text-center">
                    <div class="socials mt-20">
                      <a href="#url">
                        <span class="fa fa-facebook-f"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-twitter"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-instagram"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#url" class="team-title">Daniel Hunt</a>
              <p>Instructor</p>
            </div>
          </div>
          <!-- end team member -->
          <div class="col-lg-3 col-6 team-wrap mt-lg-5 mt-4">
            <div class="team-member last text-center">
              <div class="team-img">
                <img src="assets/images/team4.jpg" alt="" class="radius-image">
                <div class="overlay-team">
                  <div class="team-details text-center">
                    <div class="socials mt-20">
                      <a href="#url">
                        <span class="fa fa-facebook-f"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-twitter"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-instagram"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#url" class="team-title">Kelli Grant</a>
              <p>Instructor</p>
            </div>
          </div>
          <!-- end team member -->

          <div class="col-lg-3 col-6 team-wrap mt-lg-5 mt-4">
            <div class="team-member last text-center">
              <div class="team-img">
                <img src="assets/images/team5.jpg" alt="" class="radius-image">
                <div class="overlay-team">
                  <div class="team-details text-center">
                    <div class="socials mt-20">
                      <a href="#url">
                        <span class="fa fa-facebook-f"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-twitter"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-instagram"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#url" class="team-title">Jack Harry</a>
              <p>Instructor</p>
            </div>
          </div>
          <!-- end team member -->

          <div class="col-lg-3 col-6 team-wrap mt-lg-5 mt-4">
            <div class="team-member last text-center">
              <div class="team-img">
                <img src="assets/images/team6.jpg" alt="" class="radius-image">
                <div class="overlay-team">
                  <div class="team-details text-center">
                    <div class="socials mt-20">
                      <a href="#url">
                        <span class="fa fa-facebook-f"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-twitter"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-instagram"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#url" class="team-title">ELizabeth ker</a>
              <p>Instructor</p>
            </div>
          </div>
          <!-- end team member -->
          <div class="col-lg-3 col-6 team-wrap mt-lg-5 mt-4">
            <div class="team-member text-center">
              <div class="team-img">
                <img src="assets/images/team1.jpg" alt="" class="radius-image">
                <div class="overlay-team">
                  <div class="team-details text-center">
                    <div class="socials mt-20">
                      <a href="#url">
                        <span class="fa fa-facebook-f"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-twitter"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-instagram"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#url" class="team-title">Daniel Harry</a>
              <p>Instructor</p>
            </div>
          </div>
          <!-- end team member -->

          <div class="col-lg-3 col-6 team-wrap mt-lg-5 mt-4">
            <div class="team-member text-center">
              <div class="team-img">
                <img src="assets/images/team3.jpg" alt="" class="radius-image">
                <div class="overlay-team">
                  <div class="team-details text-center">
                    <div class="socials mt-20">
                      <a href="#url">
                        <span class="fa fa-facebook-f"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-twitter"></span>
                      </a>
                      <a href="#url">
                        <span class="fa fa-instagram"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#url" class="team-title">Harry Daniel</a>
              <p>Instructor</p>
            </div>
          </div>
          <!-- end team member -->
        </div>
      </div>
  </section>
  <!--//team-sec-->
  <?php

include('./Layouts/footer.php');

?>