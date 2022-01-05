<?php
/*================================================================================
	Item Name: Data Solutions
	Version: 1.0
	Author: CustDeal EServices Private Limited
	Author URL: https://www.custdeal.com
==================================================================================*/
?>




<?php include($red_page."common/header.php");?>

      <!-- About -->
      <section class="iq-breadcrumb text-left grey-bg">
         <div class="container">
            <div class="row">
               
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                  <h2 class="mt-3 font-weight-bold">Contact Us</h2>
                  <p class="mt-3">Comprehensive Accounting and Bookkeeping Services to Keep your Accounting Data Intact</p>
                  <nav aria-label="breadcrumb" class="mt-3">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $site_url; ?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                     </ol>
                  </nav>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                  <img src="<?php echo $site_url; ?>assets/images/services/07.png" class="img-fluid iq-pr-50" alt="">
               </div>
            </div>
         </div>
      </section>
      <!--=================================
      Main Content -->
      <div class="main-content" id="message">
         <section class="iq-contactbox">
            <div class="container">
               <div class="row justify-content-between">
                  <div class="col-lg-6 align-self-center">
                     <div class="contact-box">
                        <h3>Get in Touch</h3>
                        <p>Contact Our Data Services Experts for Immediate Help</p>
                        <form class="p-0"  method="post" action="<?php echo $red_page; ?>core/system_contact.php">
                           <div class="contact-form mt-4">
	<div class="row">
	<div class="col-md-12">
	<?php 
	if(isset($_SESSION['contact'])){if(isset($_SESSION['contact']['success'])){ echo "<label class='alert alert-success' >".$_SESSION['contact']['success']."</label>";}}
	if(isset($_SESSION['contact'])){if(isset($_SESSION['contact']['error'])){ echo "<label class='alert alert-danger'>".$_SESSION['contact']['error']."</label>";}}
	?>
	</div>
	</div>
                              <div class="row">
                                 <div class="col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                       <label class="mb-2">Name</label>
                                       <input type="text" name="txt_name"  class="form-control" id="txt_name" required placeholder="Your Name">
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-sm-12 mb-3">
                                    <div class="form-group">
                                       <label class="mb-2">Email</label>
                                       <input type="email" name="txt_email" class="form-control" id="txt_email" required placeholder="Your Email">
                                    </div>
                                 </div>
                                 <div class="col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                       <label class="mb-2">Mobile No.</label>
                                       <input type="number" min="1234567890" minlength="7"  name="txt_mobile" class="form-control" id="txt_mobile" placeholder="Your Phone Number">
                                    </div>
                                 </div>
                                 <div class="col-lg-12 col-sm-12 mb-3">
                                    <div class="form-group section-field textarea wow fadeInUp" data-wow-duration="2.5s">
                                       <label class="mb-2">Message</label>
                                       <textarea class="input-message w-100" name="txt_message"  id="txt_message" placeholder="Type Your Message Here" rows="5"></textarea>
                                    </div>
                                    <!--div class="section-field iq-mt-20">
                                     <div class="g-recaptcha" data-sitekey="6LdA3mYUAAAAANpUuZTLbKM_s23tTHlcdJ7dYfgI"></div>
                                    </div-->
                                    <button id="btn_send" name="btn_send" type="submit" class="button pull-right">Send Message</button>
                                 </div> 
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-5">
                     <div class="contact-bg">
                        <h2>Contact Info</h2>
                        <div class="row">
                           <div class="col-sm-12">
                              
                              <ul class="iq-contact text-white">
                                 <li>
                                    <i class="fas fa-phone"></i>
                                    <p><a href="tel:<?php echo $contact_phone; ?>" class="text-white"><?php echo $contact_phone; ?></a></p>
                                 </li>
                                 <li>
                                    <i class="fas fa-envelope"></i>
                                    <p><a href="mailto:<?php echo $contact_email; ?>" class="text-white" ><?php echo $contact_email; ?></a></p>
                                 </li>
                                 <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p><?php echo $contact_address; ?></p>
                                 </li>
                              </ul>
                           </div>
                           <div class="col-sm-12">
                              <iframe class="w-100" src="<?php echo $contact_map; ?>" style="border:0" allowfullscreen></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <!--=================================
      Main Content -->
<?php unset($_SESSION['contact']); ?>
<?php include($red_page."common/footer.php");?>