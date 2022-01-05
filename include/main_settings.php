<?php
/*================================================================================
	Item Name: SuuQa
	Version: 1.0
	Author: CustDeal EServices Private Limited
	Author URL: https://www.custdeal.com
==================================================================================*/


/*********************Main URL Of Website*****************************/
if($_SERVER['HTTP_HOST']=="localhost")
{
$site_url ="http://localhost/pharmacy/";
$admin_url = $site_url."";
$system_login = $site_url."";
$site_api= "";
}
else{
$site_url ="https://www.custdeal.com/projects_2022/pharmacy/";
$admin_url = $site_url."";
$system_login = $site_url."";
$site_api= "";
}

$site_logo_dark = $site_url."assets/img/logo-2.png";
$site_logo_light = $site_url."assets/img/logo-white.png";
$site_favicon = $site_url."assets/img/logo-white.png";


$site_author ="CustDeal Team ";
$site_short =" SuuQa ";
$site_name =" SuuQa ";
/*********************Main URL Of Website*****************************/


/***********************SEO Tags Started************************/

//Page
$site_title = 	"SuuQa";
$site_description = "";
$site_keyword = "";

/***********************SEO Tags Ended**************************/


/********************Contact Information Started**********************/
$contact_name 		= "SuuQa";
$contact_email 		= "support@custdeal.com";
$contact_phone 		= "02080904644";
$contact_address	= "CustDeal EServices Private Limited, Plot No. E203, Mohali, Punjab, 160055";
$contact_map = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.309678832831!2d76.68672791513087!3d30.709693381645213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fef08e136445d%3A0x3242e01adc4917b9!2sCustDeal%20EServices%20Private%20Limited!5e0!3m2!1sen!2sin!4v1608826324456!5m2!1sen!2sin";
/********************Contact Information Ended************************/

/***********************Socail Links Started************************/
$social_fb = "https://www.facebook.com/custdeal";
$social_twitter = 	"https://www.twitter.com/custdeal";
$social_instagram =	"https://www.instagram.com/custdeal";
$social_youtube =	"https://www.instagram.com/custdeal";
/***********************Socail Links Ended**************************/
?>