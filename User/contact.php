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
                        <li class="nav-item active">
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
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- about page about section -->
    <!-- contact1 -->
    <section class="w3l-contact-1 py-5" id="contact">
        <div class="contacts-9 py-lg-5 py-md-4">
            <div class="container">
                <div class="d-grid contact-view mb-5 pb-lg-5">
                    <div class="cont-details">
                        <div class="contactct-fm-text text-left mb-md-5 mb-4">
                            <div class="header-title mb-md-5 mt-4">
                                <span class="sub-title">Find Us</span>
                                <h3 class="hny-title text-left">Additional information </h3>
                            </div>
                            <p class="mb-sm-5 mb-4">Start working with Us that can provide everything you need to
                                generate awareness,
                                drive traffic,
                                connect. <br> We guarantee that you’ll be able to have any issue resolved within 24
                                hours.</p>

                        </div>
                        <div class="cont-top">
                            <div class="cont-left text-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Phone number</h6>
                                <p><a href="tel:+(21) 255 088 4943">+(21) 255 088 4943</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Send Email</h6>
                                <p><a href="mailto:digitaledu@mail.com" class="mail">Digitaledu@mail.com</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Office Address</h6>
                                <p class="pr-lg-5">Address here, 434 Trainer Honey street, London, UK - 62617.</p>
                            </div>
                        </div>
                    </div>
                    <div class="map-content-9">
                        <div class="contactct-fm map-content-9 pl-lg-4">
                            <div class="contactct-fm-text text-left">
                                <div class="header-title mb-md-5 mt-4">
                                    <span class="sub-title">Contact Us</span>
                                    <h3 class="hny-title text-left">Fill out the form.</h3>
                                </div>
                                <p class="mb-sm-5 mb-4">Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                                    consectetur adipisicing.</p>
                            </div>
                            <form action="https://sendmail.w3layouts.com/submitForm" method="post">
                                <div class="twice-two">
                                    <input type="text" class="form-control" name="w3lName" id="w3lName"
                                        placeholder="Name" required="">
                                    <input type="email" class="form-control" name="w3lSender" id="w3lSender"
                                        placeholder="Email" required="">
                                </div>
                                <div class="twice">
                                    <input type="text" class="form-control" name="w3lSubject" id="w3lSubject"
                                        placeholder="Subject" required="">
                                </div>
                                <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message"
                                    required=""></textarea>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="map-iframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
                        width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
                </div>

            </div>
    </section>
    <!-- /contact1 -->
    <?php

include('./Layouts/footer.php');

?>