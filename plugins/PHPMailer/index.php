<?php
/*================================================================================
	Item Name: CustDeal EServices Private Limited (Official Website)
	Version: 1.0
	Author: CustDeal EServices Private Limited
	Author URL: https://www.custdeal.com
==================================================================================*/

require_once "../include/main_settings.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- main header tags ---->
<?php include "main/main_header_tags.php";?>
<!-- main header tags ---->

<!------------------------For SEO Purpose --------------------------------------------------------->
    <title><?php echo $error404_title; ?></title>
    <meta name="description" content="<?php echo $error404_description; ?>">
    <meta name="keywords" content="<?php echo $error404_keyword; ?>">
    <meta name="author" content="<?php echo $site_author; ?>"
<!------------------------For SEO Purpose --------------------------------------------------------->

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo $site_url; ?>assets/css/style.css" />
</head>

<body>

	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>Oops!</h1>
			</div>
			<h2>404 - Page not found</h2>
			<p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
			<a href="<?php echo $site_url; ?>">Go To Homepage</a>
		</div>
	</div>

</body>

</html>
