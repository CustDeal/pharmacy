<!-----

/*================================================================================
	Item Name: Data Solutions
	Version: 1.0
	Author: CustDeal EServices Private Limited
	Author URL: https://www.custdeal.com
==================================================================================*/

------>

<!doctype html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $site_name; ?> - Medical and Dental HTML Template || Home Five</title>

    <!--====== Animate Css ======-->
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/animate.min.css" />
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/bootstrap.min.css" />
    <!--====== Slick Slider ======-->
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/slick.min.css" />
    <!--====== Nice Select ======-->
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/nice-select.min.css" />
    <!--====== Magnific Popup ======-->
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/magnific-popup.min.css" />
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/fonts/fontawesome/css/all.min.css" />
    <!--====== Flaticon ======-->
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/fonts/flaticon/css/flaticon.css" />
    <!--====== Main Css ======-->
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/style.css" />


<meta name="author" content="CustDeal EServices ( https://www.custdeal.com/)" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="keywords" content="<?php echo $site_keyword; ?>" />
<title><?php echo $site_title; ?></title>
<link href="<?php echo $site_favicon; ?>" rel="icon" />
<link rel="icon" type="image/png" href="<?php echo $site_favicon; ?>">

</head>
<body>


    <!--====== Start Template Header ======-->
    <header class="template-header sticky-header header-two">
        <div class="header-topbar d-none d-md-block">
            <div class="container-fluid container-1400">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4">


                    </div>
                    <div class="col-lg-8">
                        <ul class="contact-info">
                            <li>
                                <a href="mailto:<?php echo $contact_email; ?>"><i class="far fa-envelope"></i> Email : <?php echo $contact_email; ?></a>
                            </li>
                            <li>
                                <a href="tel:<?php echo $contact_phone; ?>"><i class="far fa-phone"></i> Call US : <?php echo $contact_phone; ?></a>
                            </li>
                            <li>
                                <div class="social-icons">
                                    <a href="<?php echo $social_fb; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?php echo $social_twitter; ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo $social_youtube; ?>"><i class="fab fa-youtube"></i></a>
                                    <a href="<?php echo $social_instagram; ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid container-1400">
            <div class="header-navigation">
                <div class="header-left">
                    <div class="site-logo">
                        <a href="<?php echo $site_url; ?>">
                            <img src="<?php echo $site_logo_dark; ?>" alt="CustDeal.com">
                        </a>
                    </div>
                    <nav class="site-menu menu-gap-left d-none d-xl-block">
                        <ul class="primary-menu">
                            <li class="active"><a href="<?php echo $site_url; ?>">Home</a></li>
                            <li><a href="<?php echo $site_url; ?>about-us">About</a></li>
                            <li><a href="<?php echo $site_url; ?>service">Services</a></li>
                            <li><a href="<?php echo $site_url; ?>contact">Contact</a></li>
                            <li><a href="<?php echo $site_url; ?>#appointment" class="btn btn-primary text-white">Book Appointment</a></li>
                       </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <ul class="extra-icons">
                        <li class="d-none d-sm-block">
                            <div class="header-search-area">

                            </div>
                        </li>
                        <li class="d-none d-xl-block">
                            <div class="off-canvas-btn style-two">
                                <span></span>
                            </div>
                        </li>
                        <li class="d-xl-none">
                            <a href="#" class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Start Off Canvas -->
        <div class="slide-panel off-canvas-panel">
            <div class="panel-overlay"></div>
            <div class="panel-inner">
                <div class="canvas-logo">
                    <img src="<?php echo $site_logo_dark; ?>" alt="CustDeal.com">
                </div>
                <div class="about-us">
                    <h5 class="canvas-widget-title">About Us</h5>
                    <p>
                        It is our mission to exceed expectations by providing exceptional medical care to our patients and at the same time, building relationships of trust with them.
                    </p>
                </div>
                <div class="contact-us">
                    <h5 class="canvas-widget-title">Contact Us</h5>
                    <ul>
                        <li>
                            <i class="far fa-map-marker-alt"></i>
                            <?php echo $contact_address; ?>
                        </li>
                        <li>
                            <i class="far fa-envelope-open"></i>
                            <a href="mailto:<?php echo $contact_email; ?>">Email : <?php echo $contact_email; ?></a>
                        </li>
                        <li>
                            <i class="far fa-phone"></i>
							<a href="tel:<?php echo $contact_phone; ?>">Call US : <?php echo $contact_phone; ?></a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="panel-close">
                    <i class="fal fa-times"></i>
                </a>
            </div>
        </div>
        <!-- End Off Canvas -->

        <!-- Start Mobile Panel -->
        <div class="slide-panel mobile-slide-panel">
            <div class="panel-overlay"></div>
            <div class="panel-inner">
                <div class="panel-logo">
                    <img src="<?php echo $site_logo_dark; ?>" alt="CustDeal.com">
                </div>
                <nav class="mobile-menu">
                    <ul class="primary-menu">
                        <li class="active"><a href="<?php echo $site_url; ?>">Home</a></li>
                        <li><a href="<?php echo $site_url; ?>about-us">About</a></li>
                        <li><a href="<?php echo $site_url; ?>service">Service One</a></li>
                        <li><a href="<?php echo $site_url; ?>contact">Contact</a></li>
                        <li><a href="<?php echo $site_url; ?>#appointment" class="btn btn-primary text-white" >Book Appointment</a></li>

                    </ul>
                </nav>
                <a href="#" class="panel-close">
                    <i class="fal fa-times"></i>
                </a>
            </div>
        </div>
        <!-- Start Mobile Panel -->
    </header>
    <!--====== End Template Header ======-->
	
