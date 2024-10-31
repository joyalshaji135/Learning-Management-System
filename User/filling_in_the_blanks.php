<?php

include('./include/connection.php');

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
            <li class="nav-item">
              <a class="nav-link" href="./registration.php">Registration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./login_redirection.php">Login</a>
            </li>
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
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> About Us</li>
        </ul>
      </div>
    </section>
  </div>
  <!-- about page about section -->



  
  <section class="w3l-contact-1 py-5" id="contact">
        <div class="contacts-9 py-lg-5 py-md-4">
            <div class="container">
                <div class="d-grid contact-view mb-5 pb-lg-5">
                    <div class="cont-details">
                    <div class="contactct-fm-text text-left mb-md-5 mb-4">
                            <div class="header-title mb-md-5 mt-4">
                            <?php
                                  if (isset($_GET['fitb_id'])) {
                                      $fill_in_the_blanks_id =  $_GET['fitb_id'];
                                      $select_fitb_query = "select * from filling_in_the_blanks_tbl where fitb_id=$fill_in_the_blanks_id";
                                      $fitb_execute_query = mysqli_query($connection,$select_fitb_query);
                                      while ($fitb_catalog = mysqli_fetch_assoc($fitb_execute_query)) {
                                          // course_id 	course_level_id 	fitb_title 	fitb_description 	first_sentence 	last_sentence 	
                                          // option_a 	option_b 	option_c 	option_d 	answer_key 	filb_status 
                                          $fitb_id = $fitb_catalog['fitb_id'];
                                          $fitb_title = $fitb_catalog['fitb_title'];
                                          $fitb_description = $fitb_catalog['fitb_description'];
                                          $first_sentence = $fitb_catalog['first_sentence'];
                                          $last_sentence = $fitb_catalog['last_sentence'];
                                          $option_a = $fitb_catalog['option_a'];
                                          $option_b = $fitb_catalog['option_b'];
                                          $option_c = $fitb_catalog['option_c'];
                                          $option_d = $fitb_catalog['option_d'];


                            ?>
                                <span class="sub-title">Fill in the Blacks Question</span>
                                <h3 class="hny-title text-left"><?php echo $fitb_title; ?> </h3>
                                <br>
                                <br>
                                <h6><?php echo $fitb_description; ?></h6>
                                <br>
                                <br>                                
                            </div>
                        </div>
                    </div>
                    <div class="map-content-3">
                        <div class="contactct-fm map-content-9 pl-lg-4">
                            <div class="contactct-fm-text text-left">
                                <div class="header-title mb-md-5 mt-4">
                                    <span class="sub-title">Question</span>
                                    <p>"<?php echo $first_sentence ?> ______ <?php echo $last_sentence ?>"</p>
                                </div>
                                <!-- <span class="sub-title">Options</span> -->
                            </div>
                            
                            <form action="#" method="post">
                                <div class="twice-two">
                                    <label for=""><?php echo $option_a ?></label>
                                        <input type="radio" class="form-control" name="w3lName" id="w3lName"
                                        placeholder="" required="" style="border-radius: 100px;">
                                    <label for=""><?php echo $option_b ?></label>
                                        <input type="radio" class="form-control" name="w3lName" id="w3lName"
                                        placeholder="asn" required="" style="border-radius: 100px;">
                                    <label for=""><?php echo $option_c ?></label>
                                        <input type="radio" class="form-control" name="w3lName" id="w3lName"
                                        placeholder="" required="" style="border-radius: 100px;">
                                    <label for=""><?php echo $option_d ?></label>
                                        <input type="radio" class="form-control" name="w3lName" id="w3lName"
                                        placeholder="asn" required="" style="border-radius: 100px;">
                                </div>

                                <div class="text-right">
                                    <input type="submit" value="Answer Submit" class="btn btn-primary btn-style mt-4" style="background-color: #f35b04;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                                      }
                                    }
                ?>
                <!-- <div class="map-iframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
                        width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
                </div> -->

            </div>
    </section>


<?php

include('./Layouts/footer.php');

?>