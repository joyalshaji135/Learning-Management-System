<?php

include('./include/connection.php');

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>DigitalEdu an Education Category Bootstrap Responsive Website Template - About : W3Layouts</title>
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
             
             if (isset($_GET['video_id'])) {
                $video_id = $_GET['video_id'];

                $select_course_level_query = "select * from course_level_tbl where course_level_id = $video_id";
                $course_level_execute_query = mysqli_query($connection,$select_course_level_query);
                while($course_level = mysqli_fetch_assoc($course_level_execute_query))
                {
                    $course_id = $course_level['course_id'];
                    $video_category_name = $course_level['course_level_name'];
                    
          ?>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> <?php echo $video_category_name;
          
             }
            }
          
          ?>
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

        <?php
             if (isset($_GET['video_id'])) {
                $course_level_id = $_GET['video_id'];
	
                $select_video_class_list_query = "select * from video_class_tbl where course_level_id = $course_level_id";
                $video_class_list_execute_query = mysqli_query($connection,$select_video_class_list_query);
                $count = 1;
                while ($video_class_catalog = mysqli_fetch_assoc($video_class_list_execute_query)) {
                    $video_class_id = $video_class_catalog['video_class_id'];
                    $video_class_title = $video_class_catalog['video_class_title'];
                    $video_class_description = $video_class_catalog['video_class_description'];
                    $video_class_thumbnail = $video_class_catalog['video_thumbnail'];
                    $video_class_status =  $video_class_catalog['video_class_status'];
                    
                    
               
        ?>


          <div class="col-lg-6 mb-lg-5 mb-md-5 mb-4">
            <img src="../Admin/Video_Thumbnail/<?php echo $video_class_thumbnail; ?>" alt="" class="radius-image-full img-fluid" style="height: 350px;" >
          </div>
          <div class="col-lg-6 pl-lg-5 ">
            <div class="header-title">
              <span class="sub-title">Class <?php echo $count; ?></span>
              <h3 class="hny-title text-left"><?php echo $video_class_title; ?></h3>
            </div>
            <p class="mt-3"><?php echo $video_class_description; ?></p>
            <?php
                if ($video_class_status == "active") {
                    echo "<a href='./vedio_class.php?video_class_id=$video_class_id' class='btn btn-style btn-primary mt-sm-5 mt-4'>Watch <span class='fa fa-chevron-right ml-2'
                    aria-hidden='true'></span></a>";
                }
                else
                {
                    echo "<a href='index.html' class='btn btn-style btn-primary mt-sm-5 mt-4'>Locked<span class='fa fa-solid fa-lock ml-3'
                    aria-hidden='true'></span></a>";
                 }
            ?>
          </div>
            <?php
            $count+1;
                }
            }
        ?>

        </div>
      </div>
    </div>
  </section>














  
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

    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for banner slider-->
    <script>
        $(document).ready(function () {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script -->
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->
    <!-- /counter-->
    <script src="assets/js/counter.js"></script>
    <!-- //counter-->
    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items:2,
                        nav: false,
                        loop:true
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->

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