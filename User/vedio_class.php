
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
          
          if (isset($_GET['video_class_id'])) {
            $video_class_id = $_GET['video_class_id'];
//  video_class_title 	video_class_description	video_thumbnail 	video_class_videos 	video_class_url 	video_class_status
            $select_video_class_query = "select * from video_class_tbl where video_class_id = $video_class_id";
            $video_class_execute_query = mysqli_query($connection,$select_video_class_query);
            while ($video_class_catalog = mysqli_fetch_assoc($video_class_execute_query)) {
                $video_class_title = $video_class_catalog['video_class_title'];
                
            
          
          ?>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> <?php echo $video_class_title; } }?>
        </li>
        </ul>
      </div>
    </section>
  </div>
  <!-- about page about section -->

 
    <!-- home page video popup section -->
    <section class="w3l-videohny" id="video">
    <div class="new-block py-5">
        <div class="container py-lg-5">
        <?php
          
          if (isset($_GET['video_class_id'])) {
            $video_class_id = $_GET['video_class_id'];
//  video_class_title 	video_class_description	video_thumbnail 	video_class_videos 	video_class_url 	video_class_status
            $select_video_class_query = "select * from video_class_tbl where video_class_id = $video_class_id";
            $video_class_execute_query = mysqli_query($connection,$select_video_class_query);
            while ($video_class_catalog = mysqli_fetch_assoc($video_class_execute_query)) {
                $video_class_title = $video_class_catalog['video_class_title'];
                $video_class_description = $video_class_catalog['video_class_description'];
                $video_thumbnail = $video_class_catalog['video_thumbnail'];
                $video_class_videos = $video_class_catalog['video_class_videos'];
                $video_class_status = $video_class_catalog['video_class_status'];
                
            
          
          ?>
                <div class="header-title mb-md-5 mb-4">
                    <span class="sub-title">Top Video Class</span>
                    <h3 class="hny-title text-left"> <?php echo $video_class_title; ?></h3>
                    <p><?php echo $video_class_description; ?></p>
                    <span class="" style="color: green;">View 0</span>
                </div>
                <div class="history-info position-relative" style="background: url(../Admin/Video_Thumbnail/<?php echo $video_thumbnail; ?>) no-repeat center;">
                        <!--//video-->
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center pl-3">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>

                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="../Admin/Video_Class/<?php echo $video_class_videos; ?>" frameborder="0"
                                allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                        <!--//video-->
                </div>
                <?php
                    }
                }
                ?>
        </div>
    </div>
</section>
<!-- //home page video popup section -->

<?php

include('./Layouts/footer.php');

?>


