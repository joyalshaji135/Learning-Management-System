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
        
      </nav>
    </div>
  </header>
  <!--/header-->
  <div class="inner-banner">
    <section class="w3l-breadcrumb text-left">
      <div class="container">
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
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
<section class="w3l-bottom-grids-6 py-5" id="features" style="background-color: rgb(5, 11, 22);">
        <div class="container py-lg-5 py-md-4">
            <div class="grids-area-hny main-cont-wthree-fea row">



                <?php
    
                    if (isset($_GET['course_id'])) {
                        $course_id = $_GET['course_id'];
                    
                        $select_course_level_query = "select * from course_level_tbl where course_id =$course_id";
                        $course_level_execute_query = mysqli_query($connection,$select_course_level_query);
                        $number_of_course_level=mysqli_num_rows($course_level_execute_query);
                        $count = 1;
                        if($number_of_course_level==0){
                                 echo "<h2 class='text-danger text-center'>404 Error: ".$course_name." Course Levels Not Available</h2>";
                        }
                        else{
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

                                <a class="btn btn-primary btn-style mt-4" href="./fill_in_the_blanks_list.php?fill_in_the_blanks_id=<?php echo $course_level_id ?>" style="width: 200px;">Exe Class <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                                <a class="btn btn-primary btn-style mt-4" href="./video_class_list.php?video_id=<?php echo $course_level_id ?>" style="width: 200px;">Video Class <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                                <a class="btn btn-primary btn-style mt-4" href="./quiz_class.php?quiz_id=<?php echo $course_level_id ?>" style="width: 200px;">Quiz Class <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
              }
                ?>
                
            </div>
        </div>
    </section>
    <!-- //bottom-grids-->

  <!-- about page about section -->


<?php

include('./Layouts/footer.php');

?>