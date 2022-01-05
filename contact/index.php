<?php
/*================================================================================
	Item Name: Data Solutions
	Version: 1.0
	Author: CustDeal EServices Private Limited
	Author URL: https://www.custdeal.com
==================================================================================*/
$red_page = "../";
require_once($red_page."include/system_config.php");
require_once($red_page."include/main_settings.php");
require_once($red_page."include/system_session.php");

?>
<?php include($red_page."views/contact.php"); ?>

<?php unset($_SESSION['success']); ?>
<?php unset($_SESSION['error']); ?>