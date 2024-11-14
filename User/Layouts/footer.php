
    <!-- footer -->
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                <div class="row footer-top-29">
                    <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                        <div class="footer-logo mb-3">
                            <a class="navbar-brand" href="index.php">LearnUpon</a>
                        </div>
                        <p>Could you clarify what you need on the topic content? 
                            Are you looking for general guidelines on content creation, 
                            specific types of content for a particular purpose, or something 
                            more related to LearnUpon’s educational content topics? Let me 
                            know, and I’d be glad to help!</p>
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
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="services.php">Courses</a></li>
                            <?php
				            if(!isset($_SESSION['client_username']))
				            {
				            	echo "
                                <li>
                                    <a href='./registration.php'>Registration</a>
                                </li>
                                <li>
                                  <a href='./login_redirection.php'>Login</a>
                                </li>";
				            }
                            else
				            {
                              $client_username = $_SESSION['client_username'];
				            	      	echo "
                              <li>
                                  <a href='./account_setting.php'>Account Settings</a>
                              </li>
                              <li>
                                <a href='./logout.php'>Logout</a>
                              </li>
                              ";
				            	      }
				  	?>
                            <li><a href="contact.php">Feedbacks</a></li>
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
                        <p><strong>Address :</strong> LearnUpon, 343 Challukunne street, Kottayam - 62617.</p>
                        <p class="my-2"><strong>Phone :</strong> <a href="tel:+91 8590343392">+91 8590343392</a></p>
                        <p><strong>Email :</strong> <a href="mailto:joyalshaji135@gmail.com">joyalshaji135@gmail.com</a></p>
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
                <p class="col-lg-8 copy-footer-29">© 2024 LearnUpon. All rights reserved. Design by <a
                        href="https://joyal-shaji.netlify.app/" target="_blank">
                        Sherin</a></p>

                <div class="col-lg-4 footer-list-29">
                    <ul class="d-flex text-lg-right justify-content-center mt-lg-0 mt-3">
                        <li><a href="index.php"> Careers</a></li>
                        <li class="mx-lg-5 mx-md-4 mx-3"><a href="https://joyal-shaji.netlify.app/">Privacy Policy</a></li>
                        <li><a href="contact.php">Feedback</a></li>
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