<?php
/*================================================================================
	Item Name: Data Solutions
	Version: 1.0
	Author: CustDeal EServices Private Limited
	Author URL: https://www.custdeal.com
==================================================================================*/


/*********************Getting Website URL Started*********************************/
 
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
    {    $url = "https://";   }
    else  
    {    $url = "http://";   }
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    

/*********************Getting Website URL Ended***********************************/


/*********************SMTP Details Started****************************************/
$mail_Host = 'mail.custdeal.com';
$mail_SMTPAuth = true;
$mail_Username = 'noreply@custdeal.com';
$mail_Password = 'Smart@Deal.com';
$mail_SMTPSecure = 'tls';
$mail_Port = 587;

$Mail_SetFrom = 'noreply@custdeal.com';
$Mail_SetFromName = 'CustDeal';

$Mail_Send_To = 'info@pro-quickbooksservices.com';

$mail_Subject_Contact = "CustDeal - New Message Received";
/*********************SMTP Details Ended******************************************/

?>