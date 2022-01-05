<?php
/*================================================================================
	Item Name: Data Solutions
	Version: 1.0
	Author: CustDeal EServices Private Limited
	Author URL: https://www.custdeal.com
==================================================================================*/
require_once("system_config.php");
require_once("main_settings.php");
require_once("system_date.php");

    //session_save_path("/home4/custdjec/tmp");
	session_start();
    session_destroy();
	session_start();
    $_SESSION['access_success'] = "Success: You are logged out successfully";
    header("Location: ".$system_login."/login");
    mysqli_close($connect_db);

?>