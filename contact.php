<!DOCTYPE HTML>
<html>
    <?php
    //Start the session for the user
    session_start();
    ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lawley Primary School</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Lawley Primary School ICT Project" />
        <meta name="keywords" content="" />
        <meta name="author" content="Ronnie Mamidza" />

        <!-- 
        //////////////////////////////////////////////////////

        DESIGNED & DEVELOPED by RONNIE MAMIDZA credit to freehtml5.co
                
        Website: 		http://inclots.com/
        Email: 			mamidzaronnie@gmail.com

        Facebook: 		https://www.facebook.com/fh5co

        //////////////////////////////////////////////////////
        -->

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <!-- Flexslider  -->
        <link rel="stylesheet" href="css/flexslider.css">

        <!-- Pricing -->
        <link rel="stylesheet" href="css/pricing.css">

        <!-- Theme style  -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <div class="fh5co-loader"></div>

        <div id="page">
            <nav class="fh5co-nav" role="navigation">
                <div class="top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <p class="site">www.lawleyprimary.edu</p>
                                <p class="num">Call: +27 073 686 3199</p>
                                <ul class="fh5co-social">
                                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter2"></i></a></li>
                                    <li><a href="#"><i class="icon-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-2">
                                <div id="fh5co-logo"><a href="index.html"><i class="icon-study"></i>LPS<span>.</span></a></div>
                            </div>
                            <div class="col-xs-10 text-right menu-1">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="uniform.php">Uniform</a></li>
                                    <li><a href="teacher.php">Team</a></li>
                                    <li><a href="sports.php">Sports</a></li>
                                    <li class="active"><a href="about.php">About</a></li>
                                    <li class="has-dropdown">
                                        <a href="blog.php">Events</a>
                                        <ul class="dropdown">
                                            <li><a href="annualgraduation.php">Annual Graduations</a></li>
                                            <li><a href="honoursday.php">Honours Day</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li class="btn-cta"><a href="login.php"><span>Login</span></a></li>
                                    <li class="btn-cta"><a href="edit.php"><span>Edit</span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>

            <aside id="fh5co-hero">
                <div class="flexslider">
                    <ul class="slides">
                        <li style="background-image: url(images/class1.jpg);">
                            <div class="overlay-gradient"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                        <div class="slider-text-inner">
                                            <h1 class="heading-section">Contact us</h1>
                                            <h2>Leave us a feedback or enquiries.</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>

            <div id="fh5co-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-push-1 animate-box">

                            <div class="fh5co-contact-info">
                                <h3>Contact Information</h3>
                                <ul>
                                    <li class="address">Address: 461, 3RD AVENUE, <br>ENNERADALE, JOHANNESBURG <br>
                                        Local Authority : CITY OF JOHANNESBURG <br>METROPOLITAN MUNICIPALITY</li>
                                    <li class="phone"><a href="tel:+27 073 686 3199">+27 073 686 3199</a></li>
                                    <li class="email"><a href="mailto:lawleyprimary2010@gmail.com">lawleyprimary2010@gmail.com</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-md-6 animate-box">
                            <h3>Get In Touch</h3>
                            <form action="#">
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <!-- <label for="fname">First Name</label> -->
                                        <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <label for="lname">Last Name</label> -->
                                        <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="email">Email</label> -->
                                        <input type="text" id="email" class="form-control" placeholder="Your email address">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="subject">Subject</label> -->
                                        <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="message">Message</label> -->
                                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                </div>

                            </form>		
                        </div>
                    </div>

                </div>
            </div>
            <div id="map" class="fh5co-map"></div>

            <div id="fh5co-register" style="background-image: url(images/img_bg_2.jpg);">
                <div class="overlay"></div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 animate-box">
                        <div class="date-counter text-center">
                            <h2>Get 400 of Online Courses for Free</h2>
                            <h3>By Mike Smith</h3>
                            <div class="simply-countdown simply-countdown-one"></div>
                            <p><strong>Limited Offer, Hurry Up!</strong></p>
                            <p><a href="#" class="btn btn-primary btn-lg btn-reg">Register Now!</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/education.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-3 fh5co-widget">
                            <h3>About Lawley Primary School</h3>
                            <p>We foster our students’ love for learning, encourage them to try new and exciting things, and give them a solid foundation to build on.</p>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                            <h3>Links</h3>
                            <ul class="fh5co-footer-links">
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">School Program</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row copyright">
                        <div class="col-md-12 text-center">
                            <p>
                                <small class="block">&copy; 2022. All Rights Reserved.</small> 
                                <small class="block">Designed by <a href="" target="_blank">Ronnie Mamidza & freehtml5.co</a> <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexels</a></small>
                            </p>
                        </div>
                    </div>

                </div>
            </footer>
        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Stellar Parallax -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Flexslider -->
        <script src="js/jquery.flexslider-min.js"></script>
        <!-- countTo -->
        <script src="js/jquery.countTo.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
        <script src="js/google_map.js"></script>
        <!-- Count Down -->
        <script src="js/simplyCountdown.js"></script>
        <!-- Main -->
        <script src="js/main.js"></script>
        
    </body>
</html>

