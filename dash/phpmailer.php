<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';

define('GUSER', $mail); // GMail username
define('GPWD', $pass); // GMail password

function smtpmailer($to, $from, $from_name, $subject, $body) {
    global $error;
    $mail = new PHPMailer();  // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true;  // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->Username = GUSER;
    $mail->Password = GPWD;
    $mail->SetFrom($from, $from_name);
    $mail->Subject = $subject;
    $mail->isHTML(TRUE);
    $mail->Body = $body;
    foreach ($to as $item){
        $mail->AddAddress($item);
    }
    if(!$mail->Send()) {
        $error = $mail->ErrorInfo;
        return false;
    } else {
        return true;
    }
}

function is_bold($str){
    $str = implode('<h3 style="color:#FF8C07;">',explode('{',$str));
    $str = implode('</h3>',explode('}',$str));

    return $str;
}

$message = '<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Demystifying Email Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<table align="center" border="0" cellpadding="0" width="600" cellspacing="0" style="border-collapse: collapse;">
    <tr align="left">
        <td><a href="https://ramitours.co"><img src="https://i.imgur.com/nA1KXcH.png" alt="logo" style="margin: 10px;" /></a></td>
    </tr>

    <tr align="left">
        <td width="80%" height="600" style="padding: 20px 50px; background: rgba(255,255,255,0.5); color: rgba(0,0,0,0.9);">'.is_bold($reply).'</td>
    </tr>

    <tr align="center" bgcolor="#FF8C07" height="30px">
        <td align="center">
            <table width="50%" height="100%" align="center">
                <tr align="center">
                    <td align="center"><a href="https://'.$face['link'].'" style="color: white; margin:15px; position:relative; top: 3px;" ><img src="https://i.imgur.com/YV3eyNZ.png" width="20" height="20" /></a></td>
                    <td align="center"><a href="https://api.whatsapp.com/send?phone='.$what['link'].'" style="color: white; margin:15px; position:relative; top: 3px;" ><img src="https://i.imgur.com/8hJviPM.png" width="20" height="20" /></a></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>';

$to = array($email);
if (smtpmailer($to, GUSER, 'Ramitours Co.', 'Reply From Ramitours Co.', $message)) {
    $msg = 'massage sent successfully';
}
if (!empty($error)) echo $msg = $error;