<?php

include('./include/connection.php');

?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LMS</title>
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
        <h1><a class="navbar-brand" href="index.html">
            Digital<span class="sub-log">E</span>du
          </a></h1>
        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
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
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="services.html">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./registration.html">Registration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
        
      </nav>
    </div>
  </header>
  <!--/header-->
  <div class="inner-banner">
    <section class="w3l-breadcrumb text-left">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.html">Home</a></li>
          <?php
            if (isset($_GET['course_id'])) {
                $course_id = $_GET['course_id'];
            
                $select_course_query = "select * from course_tbl where course_id = $course_id";
                $course_execute_query = mysqli_query($connection,$select_course_query);
                while ($course = mysqli_fetch_assoc($course_execute_query)) {
                    $course_name = $course['course_name'];
               
            ?>

          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> <?php echo $course_name ?></li>
          <?php
           }
        }
        ?>
        </ul>
      </div>
    </section>
  </div>
  <!-- about page about section -->

<!--//courses-->
<section class="w3l-bottom-grids-6 py-5" id="features">
        <div class="container py-lg-5 py-md-4">
            <div class="grids-area-hny main-cont-wthree-fea row">



                <?php
    
                    if (isset($_GET['course_id'])) {
                        $course_id = $_GET['course_id'];
                    
                        $select_course_level_query = "select * from course_level_tbl where course_id =$course_id";
                        $course_level_execute_query = mysqli_query($connection,$select_course_level_query);
                        while ($course_level = mysqli_fetch_assoc($course_level_execute_query)) {
                            $course_level_id = $course_level['course_level_id'];
                            $course_level_name = $course_level['course_level_name'];
                            $course_level_image = $course_level['course_level_image'];
                        
                        
                       
                
                ?>
                <!-- /feature-left-->
                <div class="col-md-4 grids-feature mt-4">
                    <div class="area-box">
                        <div class="row">
                            <div class="col-sm-4 icon">
                                <img src="../Admin/Course_Level/<?php echo $course_level_image ?>" alt="" srcset="" style="height: 100px; width: 100px; border-radius: 100px;">
                            </div>
                            <div class="col-sm-8 area-box-info">
                                <h4><a href="#feature" class="title-head"><?php echo $course_level_name ?></a></h4>
                                <p class="mt-3"></p>

                                <a class="btn btn-primary btn-style mt-4" href="./filling_in_the_blanks.php?filling_in_the_blanks_id=">Exe Class <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                                <a class="btn btn-primary btn-style mt-4" href="./vedio_class.php?video_id=">Video Class <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                                <a class="btn btn-primary btn-style mt-4" href="./quiz_class.php?quiz_id=">Quiz Class <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
                
            </div>
        </div>
    </section>
    <!-- //bottom-grids-->

  <!-- about page about section -->

    <!-- footer -->
    <section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
            <div class="footer-logo mb-3">
              <a class="navbar-brand" href="index.html">DigitalEdu</a>
            </div>
            <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at
              tempufddfel. Lorem ipsum dolor sit amet Semper at elit.</p>
            <div class="main-social-footer-29 mt-4">
              <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
              <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
              <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
              <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

            <ul>
              <h6 class="footer-title-29">Usefull Links</h6>
              <li><a href="about.html">About Us</a></li>
              <li><a href="services.html">Courses</a></li>
              <li><a href="#pricing"> Pricing plans</a></li>
              <li><a href="#careers"> Careers</a></li>
              <li><a href="blog.html"> Blog posts</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
            <h6 class="footer-title-29">More Info</h6>
            <ul>
              <li><a href="#profile">Profile</a></li>
              <li><a href="#vision">Vision & Values</a></li>
              <li><a href="#history">History</a></li>
              <li><a href="#leader">Leadership</a></li>
              <li><a href="#help">Help</a></li>
              <li><a href="#support"> Support</a></li>
            </ul>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Contact Info </h6>
            <p><strong>Address :</strong> DigitalEdu, 343 Honey Avenue street, NY - 62617.</p>
            <p class="my-2"><strong>Phone :</strong> <a href="tel:+12 23456799">+12 23456799</a></p>
            <p><strong>Email :</strong> <a href="mailto:info@example.com">info@example.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //footer -->

  <!-- copyright -->
  <section class="w3l-copyright">
    <div class="container">
      <div class="row bottom-copies">
        <p class="col-lg-8 copy-footer-29">© 2020 DigitalEdu. All rights reserved. Design by <a
            href="https://w3layouts.com/" target="_blank">
            W3Layouts</a></p>

        <div class="col-lg-4 footer-list-29">
          <ul class="d-flex text-lg-right justify-content-center mt-lg-0 mt-3">
            <li><a href="#careers"> Careers</a></li>
            <li class="mx-lg-5 mx-md-4 mx-3"><a href="#privacymy-lg-0 my-4">Privacy Policy</a></li>
            <li><a href="contact.html">Contact us</a></li>
          </ul>
        </div>

      </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //copyright -->
  <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
  <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- //disable body scroll which navbar is in active -->

  <!--bootstrap-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap-->

</body>

</html>