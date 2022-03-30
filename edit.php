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
        <div id="page">
            <div id="fh5co-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-push-1 animate-box">

                            <div class="fh5co-contact-info">
                                <h3>Register New User</h3>
                            </div>

                        </div>
                        <div class="col-md-6 animate-box">
                            <h3>Enter New User Personal Information</h3>
                            <form action="#">
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <label for="fname">First Name</label> 
                                        <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lname">Last Name</label> 
                                        <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="email">Email</label> 
                                        <input type="text" id="email" class="form-control" placeholder="Your email address">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                       <label for="email">Phone Number</label>
                                        <input type="text" id="phone" class="form-control" placeholder="Your phone number">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input type="submit" value="Add User" class="btn btn-primary">
                                </div>

                            </form>		
                        </div>
                    </div>

                </div>
            </div>
            <div id="map" class="fh5co-map"></div>

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
