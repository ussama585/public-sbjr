<?php

session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'php-mailer/src/Exception.php';
require 'php-mailer/src/PHPMailer.php';
//require 'php-mailer/src/SMTP.php';


// Enter your email address. If you need multiple email recipes simply add a comma: email@domain.com, email2@domain.com

// Add your reCaptcha Secret key if you wish to activate google reCaptcha security
$recaptcha_secret_key = ''; 

// Default message responses
const RESPONSE_MSG = [
    'success' => [
        "message_sent"           => "Your request has been sent for review and we shall respond shortly."
    ],
    'form' => [
        "recipient_email"        => "Message not sent! The recipient email address is missing in the config file.",
        "name"                   => "Contact Form",
        "subject"                => "New Message From Contact Form"
    ],
    'google' => [
        "recapthca_invalid"     => "reCaptcha is not Valid! Please try again.",
        "recaptcha_secret_key"  => "Google reCaptcha secret key is missing in config file!"
    ],
    'config' => [
        "allow_url_fopen_invalid"     => "PHP: <strong>allow_url_fopen</strong> OR <strong>php_curl</strong> extension must be enabled in your php.ini file in order to use Google reCaptcha."
    ]
];


if( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"];
    $message_body = $_POST["msg_body"];
    $form_type = $_POST["form_type"];
    $email_from = $email;
    if($form_type=='invitation')
    {
      $suffix = $_POST["suffix"];
      $first_name = $_POST["first_name"];
      $last_name = $_POST["last_name"];
      $company = $_POST["company"];
      $position = $_POST["position"];
      $phone_number = $_POST["phone_number"]; //['full']
      $full_name=$first_name.' '.$last_name;
      $subject = "Secure Invitation";
    }else
    {
      $full_name = $_POST["full_name"];
      $subject = "Contact Us Email";
    }
   $email_subject =  $subject; 
   $email_txt =''; 
//   $email_to = 'ajaved.859@gmail.com';
  $email_to = 'invitation@saudibanksjointreception.com';
   $msg_txt="You have recieved a new attachment message from: ".$email_from."\r\n";
   $email_txt .= $msg_txt;
   $email_txt .= "Full Name: ".$full_name."\r\n";
   if($form_type=='invitation')
   {
   $email_txt .= 'Suffix: '.$suffix."\r\n";
   $email_txt .= 'Company: '.$company."\r\n";
   $email_txt .= 'Position: '.$position."\r\n";
   $email_txt .= 'Phone Number: '.$phone_number."\r\n";
   }
   $email_txt .= 'Body: '.$message_body."\r\n";
   $email_message= $email_txt;
//   $headers = "From: ".$email_from;
//   $headers  = "From: " . strip_tags($email_from) . "\r\n";
//   $headers .= "Reply-To: " . strip_tags($email_from) . "\r\n";
//   $headers .= "MIME-Version: 1.0\r\n";
//   $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    if($email_from != '') {
        $mail = new PHPMailer;
        $mail->IsHTML(true);                  
        $mail->CharSet = 'UTF-8';
        $mail->From = $email_from;
        // $mail->FromName = $name;
        $mail->AddAddress($email_to);
        $mail->AddReplyTo($email_from);
        $mail->Subject = $subject; 
        $mail->Body = $email_message; 

        if(!$mail->Send()) {
            $response = array ('response'=>'error', 'message'=> $mail->ErrorInfo);  
        }else {                  
            $response = array ('response'=>'success', 'message'=> RESPONSE_MSG['success']['message_sent']);  
        }
        echo json_encode($response);
    } else {
        $response = array ('response'=>'error');     
        echo json_encode($response);
    }
}
?>