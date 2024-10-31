
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
                                <input type="search" class="search__input" name="search"
                                    placeholder="Search for Courses.." onload="equalWidth()" required>
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
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./registration.php">Registration</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="./login_redirection.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->

                <div class="mobile-position">
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
                </div>
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
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Login</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- about page about section -->


    <!--//courses-->
    <section class="w3l-bottom-grids-6 py-5" id="features">
        <div class="container py-lg-5 py-md-4">
            <div class="grids-area-hny main-cont-wthree-fea row">
                <!-- /feature-left-->
                <div class="col-md-6 grids-feature mt-4">
                    <div class="area-box">
                        <div class="row">
                            <div class="col-sm-2 icon">
                                <span class="fa fa-users"></span>
                            </div>
                            <div class="col-sm-10 area-box-info">
                                <h4><a href="#feature" class="title-head">Client</a></h4>
                                <p class="mt-3">Content</p>
                                <a class="btn btn-primary btn-style mt-4" href="./login.php">Login <span class="fa fa-sign-in ml-2" aria-hidden="true"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grids-feature mt-4">
                    <div class="area-box">
                        <div class="row">
                            <div class="col-sm-2 icon">
                                <span class="fa fa-user-secret"></span>
                            </div>
                            <div class="col-sm-10 area-box-info">
                                <h4><a href="#feature" class="title-head">Admin</a></h4>
                                <p class="mt-3">Content</p>
                                <a class="btn btn-primary btn-style mt-4" href="../Admin/login.php">Login <span class="fa fa-sign-in ml-2" aria-hidden="true"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //bottom-grids-->
    
<?php

include('./Layouts/footer.php');

?>