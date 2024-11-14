
<!-- Include Database Connection -->

<?php

include('./include/connection.php');

?>

<!-- Common Function -->

<?php

include('./Function/common_function.php');

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
                        <li class="nav-item ">
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
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Registration</li>
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
                                    <span class="sub-title">Registration</span>
                                    <h3 class="hny-title text-left">Client Registration</h3>
                                </div>
                                <p class="mb-sm-5 mb-4">

                                </p>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="twice-two">
                                    <!-- client_first_name 	client_last_name 	client_username 	client_email 	client_phone_number 	
                                     client_password 	client_photo 	client_address 	client_status 	 -->
                                    <input type="text" class="form-control" name="client_first_name" id="w3lName"
                                        placeholder="First Name" required="">
                                    <input type="text" class="form-control" name="client_last_name" id="w3lSender"
                                        placeholder="Last Name" required="">
                                </div>
                                <div class="twice">
                                    <input type="text" class="form-control" name="client_username" id="w3lSubject"
                                        placeholder="Username" required="">
                                </div>
                                <div class="twice">
                                    <input type="email" class="form-control" name="client_email" id="w3lSubject"
                                        placeholder="Email" required="">
                                </div>
                                <div class="twice">
                                    <input type="text" class="form-control" name="client_phone_number" id="w3lSubject"
                                        placeholder="Phone Number" required="">
                                </div>
                                <div class="twice-two">
                                    <input type="password" class="form-control" name="client_password" id="w3lName"
                                        placeholder="Password" required="">
                                    <input type="password" class="form-control" name="client_confirm_password" id="w3lSender"
                                        placeholder="Confirm Password" required="">
                                </div>
                                <div class="twice">
                                    <input type="file" class="form-control" name="client_photo" id="w3lSubject"
                                        placeholder="" required="">
                                </div>
                                <textarea name="client_address" class="form-control" id="w3lMessage" placeholder="Address"
                                    required=""></textarea>
                                <div class="text-right">
                                    <input type="submit" name="client_registration" value="Registration" class="btn btn-primary btn-style mt-4" style="background-color: #f35b04;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="map-iframe">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
                        width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
                </div> -->

            </div>
    </section>
    <!-- /contact1 -->
<?php

include('./Layouts/footer.php');

?>


<?php
if (isset($_POST['client_registration'])) {
    //  client_first_name 	client_last_name 	client_username 	client_email 	client_phone_number 	
    //  client_password 	client_photo 	client_address  client_ip_address 	client_status 	 

    $client_first_name = $_POST['client_first_name'];
    $client_last_name = $_POST['client_last_name']; 
    $client_username = $_POST['client_username'];
    $client_email = $_POST['client_email'];
    $client_phone_number = $_POST['client_phone_number'];
    $client_password = $_POST['client_password'];
    $client_hash_password = password_hash($client_password, PASSWORD_DEFAULT);
    $client_confirm_password = $_POST['client_confirm_password'];
    $client_address = $_POST['client_address'];
    $client_ip_address = getIPAddress();
    $client_status = "active";

    // Image Accessing
    $client_photo = $_FILES['client_photo']['name'];
	$client_temp_image = $_FILES['client_photo']['tmp_name'];

    //Select Existing Client Query
	$select_already_exist_clients_check_query = "select * from client_registration_tbl where 
    client_username='$client_username' or client_email='$client_email' or client_phone_number='$client_phone_number'";

    $already_exist_clients_check_execute_query = mysqli_query($connection, $select_already_exist_clients_check_query);
    $number_of_already_existing_clients = mysqli_num_rows($already_exist_clients_check_execute_query);

    if ($number_of_already_existing_clients > 0) 
    {
        echo "<script>alert('Username,Email and Phone Number are Already Exist')</script>";
    }
    else
    {
        move_uploaded_file($client_temp_image, "./Client_Image/$client_photo");
		$insert_client_registration_query = "insert into `client_registration_tbl` 
                    (client_first_name,client_last_name,client_username,client_email,client_phone_number,client_password,client_photo,client_address,client_ip_address,client_status) 
                    values ('$client_first_name','$client_last_name','$client_username','$client_email','$client_phone_number','$client_hash_password','$client_photo','$client_address','$client_ip_address','$client_status')";
		$client_registration_execute_query = mysqli_query($connection, $insert_client_registration_query);
        if ($client_registration_execute_query) {
            echo "<script>alert('Registration Successfully')</script>";
            echo "<script>window.open('./login.php','_self')</script>";
        }
        else
        {
            die(mysqli_error($connection));
        }
    }
}

?>