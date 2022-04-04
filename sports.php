<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
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
        <?php
        // put your code here
        ?>

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
                        <li style="background-image: url(images/children11.jpeg);">
                            <div class="overlay-gradient"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                        <div class="slider-text-inner">
                                            <h1 class="heading-section">Our Sporting Activities</h1>
                                            <h2>We believe that youth sports and education are strongly intertwined and that the young student-athlete 
                                                should be exposed to sports in a way that will have lifetime benefits. If structured correctly,
                                                youth sports offer all participants life-long memories and invaluable lessons concerning values
                                                and virtues.  As the athletic field is an extension of the classroom, Our philosophy is to
                                                instill responsibility, independence and leadership
                                                so that they are better prepared for everyday life even outside the school premises. 
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>

            <div id="fh5co-course">
                <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                            <h2>Our Sports</h2>
                            <p>Our school offer inclusive sporting codes, that means, no participation is determined by gender, mainly, we offer Football and Netball.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 animate-box">
                            <div class="course">
                                <a href="#" class="course-img" style="background-image: url(images/soccer.jpg);">
                                </a>
                                <div class="desc">
                                    <h3><a href="football.php">Football</a></h3>
                                    <p>Our mission is to provide a positive, competitive youth soccer experience for the learner, parent and teacher in charge of the team.</p>
                                    <span><a href="football.php" class="btn btn-primary btn-sm btn-course">Take a Tour</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box">
                            <div class="course">
                                <a href="#" class="course-img" style="background-image: url(images/netball.jpg);">
                                </a>
                                <div class="desc">
                                    <h3><a href="netball.php">Netball</a></h3>
                                    <p>“Our vision of making netball fashionable and taking netball back to the people will be attainable when we start initiatives like these, development is very crucial, and I believe that we are headed in the right direction here.” __NetballSA</p>
                                    <span><a href="netball.php" class="btn btn-primary btn-sm btn-course">Take A Tour</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box">
                            <div class="course">
                                <a href="#" class="course-img" style="background-image: url(images/athletics.jpg);">
                                </a>
                                <div class="desc">
                                    <h3><a href="athletics.php">Athletics</a></h3>
                                    <p>Dedicated to providing learner-athletes with a rich co-curricular program that encourages our learners to grow as individuals and leaders by experiencing the importance of being part of a team.</p>
                                    <span><a href="athletics.php" class="btn btn-primary btn-sm btn-course">Take A Tour</a></span>
                                </div>
                            </div>
                        </div>
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
                            <li><a href="teacher.php">Team</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">School Program</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2022. All Rights Reserved.</small> 
                            <small class="block">Designed by <a href="" target="_blank">Ronnie Mamidza</a> <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexels</a></small>
                        </p>
                    </div>
                </div>

            </div>
        </footer>

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
        <!-- Count Down -->
        <script src="js/simplyCountdown.js"></script>
        <!-- Main -->
        <script src="js/main.js"></script>
        <script>

        </script>

    </body>
</html>
