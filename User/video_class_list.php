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
                $number_of_video_class=mysqli_num_rows($video_class_list_execute_query);
                $count = 1;
                if($number_of_video_class==0){
                         echo "<h2 class='text-danger text-center'>404 Error: Video Class Not Available</h2>";
                }
                else{
                while ($video_class_catalog = mysqli_fetch_assoc($video_class_list_execute_query)) {
                    $video_class_id = $video_class_catalog['video_class_id'];
                    $video_class_title = $video_class_catalog['video_class_title'];
                    $video_class_description = $video_class_catalog['video_class_description'];
                    $video_class_thumbnail = $video_class_catalog['video_thumbnail'];
                    $video_class_status =  $video_class_catalog['video_class_status'];
                    
                    
               
        ?>


          <div class="col-lg-6 mb-lg-5 mb-md-5 mb-4">
            <img src="../Admin/Video_Thumbnail/<?php echo $video_class_thumbnail; ?>" alt="" class="radius-image-full img-fluid" style="height: 300px; width: 600px;" >
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
                    echo "<a href='index.php' class='btn btn-style btn-primary mt-sm-5 mt-4'>Locked<span class='fa fa-solid fa-lock ml-3'
                    aria-hidden='true'></span></a>";
                 }
            ?>
          </div>
            <?php
            $count++;
                }
            }
          }
        ?>

        </div>
      </div>
    </div>
  </section>

<?php

include('./Layouts/footer.php');

?>