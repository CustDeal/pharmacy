<?php
require_once("../include/system_config.php");
require_once("../include/main_settings.php");
require_once("../include/system_session.php");
require_once("../include/system_date.php"); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once("../plugins/PHPMailer/Exception.php");
require_once("../plugins/PHPMailer/PHPMailer.php");
require_once("../plugins/PHPMailer/SMTP.php");

if(isset($_POST['btn_send']))
{

	$already_exists = "0";
    $txt_name = $_POST['txt_name'];
    $txt_email = $_POST['txt_email'];
    $txt_mobile = $_POST['txt_mobile'];
    $txt_message = $_POST['txt_message'];
	
	if($already_exists==="0")
	{
		
$mail = new PHPMailer;
$url_hots = $site_url;

// SMTP configuration
$mail->isSMTP();
$mail->Host = $mail_Host;
$mail->SMTPAuth = $mail_SMTPAuth;
$mail->Username = $mail_Username;
$mail->Password = $mail_Password;
$mail->SMTPSecure = $mail_SMTPSecure;
$mail->Port = $mail_Port;

$mail->setFrom($Mail_SetFrom, $Mail_SetFromName);

// Add a recipient
$mail->addAddress($Mail_Send_To);

// Email subject
$mail->Subject = $mail_Subject_Contact;

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = '<!DOCTYPE html>
<html>

<head>
    <title>Email Verification</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

</head>

<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
    <!-- HIDDEN PREHEADER TEXT -->
    <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Times New Roman, Times, serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"> We&rsquo;re got a new message below are details of message. </div>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <!-- LOGO -->
        <tr>
            <td bgcolor="#0000a0" align="center">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td align="center" valign="top" style="padding: 40px 10px 40px 10px;"> </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#0000a0" align="center" style="padding: 0px 10px 0px 10px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: Times New Roman, Times, serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
						
<a href="'.$site_url.'"><img src="'.$site_logo_dark.'" style="display: block; border: 0px; width:80%;" /></a>
<h1 style="font-size: 48px; font-weight: 400; margin: 2;">Hi Admin!</h1> 

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family: Times New Roman, Times, serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                            <p style="margin: 0;">We&rsquo;re got a new message below are details of message.</p>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" align="left">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="border-radius: 3px; font-size: 20px; font-family: Times New Roman, Times, serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #0000a0; display: inline-block;" bgcolor="#0000a0">Person Name: '.$txt_name.'</td>
                                                <td align="center" style="border-radius: 3px; font-size: 20px; font-family: Times New Roman, Times, serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #0000a0; display: inline-block;" bgcolor="#0000a0">Person Mobile No.: '.$txt_mobile.'</td>
                                                <td align="center" style="border-radius: 3px; font-size: 20px; font-family: Times New Roman, Times, serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #0000a0; display: inline-block;" bgcolor="#0000a0">Person Email Address: '.$txt_email.'</td>
                                                <td align="center" style="border-radius: 3px; font-size: 20px; font-family: Times New Roman, Times, serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #0000a0; display: inline-block;" bgcolor="#0000a0">Message: '.$txt_message.'</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr> <!-- COPY -->

                    <tr>
                        <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: Times New Roman, Times, serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                            <p style="margin: 0;">Cheers,<br>'.$Mail_SetFromName.' Team</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>';
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
	
		$_SESSION['contact']['error'] = "Error : Message Not Send. ".$mail->ErrorInfo;
		header("Location:  ".$site_url."contact/#message");
		
}else{
		$_SESSION['contact']['success'] = "Succcess : Message Sent. ";
		header("Location:  ".$site_url."contact/#message");
}
		
	}
	}
else
{
	$_SESSION['contact']['error'] = "Error : Invalid Action Perforemed";
	header("Location:  ".$site_url."/#message");
}
	
mysqli_close($connect_db);
	
?>