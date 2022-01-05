<?php
/*================================================================================
	Item Name: Data Solutions
	Version: 1.0
	Author: CustDeal EServices Private Limited
	Author URL: https://www.custdeal.com
==================================================================================*/
?>




<?php include($red_page."common/header.php");?>

    <!--====== Page Title Start ======-->
    <section class="page-title-area page-title-bg" style="background-image: url(assets/img/section-bg/page-title.jpg);">
        <div class="container">
            <h1 class="page-title">Contact Us</h1>

            <ul class="breadcrumb-nav">
                <li><a href="#">Home</a></li>
                <li><i class="fas fa-angle-right"></i></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <!--====== Contact Info Section Start ======-->
    <section class="section-gap contact-top-wrappper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="contact-info-wrapper">
                        <div class="single-contact-info">
                            <div class="single-contact-info">
                                <h3 class="info-title">
                                    <i class="fas fa-map-marker-alt"></i> Address
                                </h3>
                                <p>
                                    <?php echo $contact_address; ?>
                                </p>
                            </div>
                            <div class="single-contact-info">
                                <h3 class="info-title">
                                    <i class="fas fa-coffee"></i> Get In Touch
                                </h3>
                                <ul>
                                    <li>
                                        <span>Phone Number</span><a href="tel:<?php echo $contact_phone; ?>"><?php echo $contact_phone; ?></a>
                                    </li>
                                    <li>
                                        <span>Email Address</span><a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="single-contact-info">
                                <h3 class="info-title">
                                    <i class="fas fa-comments"></i> Follow Us
                                </h3>
                                <p class="social-icon">
                                    <a href="<?php echo $social_fb; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?php echo $social_twitter; ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo $social_youtube; ?>"><i class="fab fa-youtube"></i></a>
                                    <a href="<?php echo $social_instagram; ?>"><i class="fab fa-instagram"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="working-hour-chart">
                        <h2 class="chart-title">Working Hour</h2>
                        <ul>
                            <li>
                                <span><i class="fas fa-angle-right"></i>Monday</span>
                                <span>9:00-19:00</span>
                            </li>
                            <li>
                                <span><i class="fas fa-angle-right"></i>Tuesday</span>
                                <span>9:00-19:00</span>
                            </li>
                            <li>
                                <span><i class="fas fa-angle-right"></i>Wednesday</span>
                                <span>9:00-19:00</span>
                            </li>
                            <li>
                                <span><i class="fas fa-angle-right"></i>Thursday</span>
                                <span>9:00-19:00</span>
                            </li>
                            <li>
                                <span><i class="fas fa-angle-right"></i>Friday</span>
                                <span>9:00-19:00</span>
                            </li>
                            <li>
                                <span><i class="fas fa-angle-right"></i>Saturday</span>
                                <span>9:00-19:00</span>
                            </li>
                            <li>
                                <span><i class="fas fa-angle-right"></i>Sunday</span>
                                <span>9:00-19:00</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Info Section End ======-->

    <!--====== Contact Form Start ======-->
    <section class="contact-form-area">
        <div class="contact-map">
            <iframe src="<?php echo $contact_map; ?>" loading="lazy"></iframe>
        </div>

        <div class="section-gap" id="compose">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-heading mb-60 text-center">
                            <span class="tagline">We're Ready To Help You</span>
                            <h2 class="title">Leave a Message</h2>
                        </div>
                        <form action="#" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <label for="name">Your Full Name</label>
                                        <input type="text" placeholder="Michael M. Smith" id="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <label for="email">Email Address</label>
                                        <input type="email" placeholder="support@gmail.com" id="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <label for="number">Phone Number</label>
                                        <input type="text" placeholder="+012 (345) 678 99" id="number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <label for="website">Subject</label>
                                        <input type="text" placeholder="Subject" id="website">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-field">
                                        <label for="message">Write Message</label>
                                        <textarea id="message" placeholder="Write Message...."></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-center">
                                        <button class="template-btn">Send Us Message <i class="far fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Form End ======-->
<?php unset($_SESSION['contact']); ?>
<?php include($red_page."common/footer.php");?>