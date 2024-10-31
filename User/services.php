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
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item active">
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
    <section class="w3l-breadcrumb">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Courses</li>
        </ul>
      </div>
    </section>
  </div>
  <!-- about page about section -->

  <!--/courses-->
  <section class="w3l-blogpost-content w3l-courses py-5" style="background-color: rgb(5, 11, 22)";>
    <div class="container py-md-5">
      <div class="header-title mb-md-5 mb-4">
        <span class="sub-title">Top Courses</span>
        <h3 class="hny-title text-left"> Popular Courses</h3>
      </div>
      <div class="row">
        



          <?php
          $select_view_course_query="select * from course_tbl"; 
           //Change this order by Concept
          $result_view_course_query=mysqli_query($connection,$select_view_course_query);
                while($course=mysqli_fetch_assoc($result_view_course_query))
                {
                    $course_id = $course['course_id'];
                    $course_name = $course['course_name'];
                    $course_description = $course['course_description'];
                    $course_image = $course['course_image'];
                    $course_status = $course['course_status'];

         ?>



        <div class="col-lg-4 col-md-6 mt-md-0 mt-4 mb-lg-5">
          <div class="card">
            <div class="card-header p-0 position-relative">

              <a href="course_program.php?course_id=<?php echo $course_id ?>">
                <img class="card-img-bottom d-block radius-image-full" src="../Admin/Course_Image/<?php echo $course_image ?>" alt="Card image cap" style="height: 200px
                ;">
              </a>
            </div>
            <div class="card-body blog-details">
              <p class="price-review"><?php echo $course_name ?></p>
              <a href="course_program.php?course_id=<?php echo $course_id ?>" class="blog-desc mt-2"><?php echo $course_description ?>
              </a>
              <div class="course-meta mt-1">
                <div class="meta-item course-lesson">
                  <span class="fa "></span>
                  <span class="meta-value" style="color: green;"> Active </span>
                </div>
                <div class="meta-item course-students">
                  <span class=""></span>
                  <a href="course_program.php?course_id=<?php echo $course_id ?>">
                  <span class="meta-value"> Click Here </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
<?php

            }
?>

      </div>
      <div class="course-button mt-lg-4 text-center">
      <a href="contact.php" class="btn btn-style btn-primary pt-lg-3 mt-sm-5 mt-4">Start Today <span
          class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
        </div>
    </div>
  </section>
  <!--//courses-->
<?php

include('./Layouts/footer.php');

?>