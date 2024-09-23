<?php
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
      $phone_number = $_POST["phone_number"];
      $full_name=$first_name.' '.$last_name;
      $subject = "Secure Invitation";
   }else
   {
      $full_name = $_POST["full_name"];
      $subject = "Contact Us Email";
   }
   session_start();
   $email_subject =  $subject; 
   $email_txt =''; 
//   $email_to = 'ajaved.859@gmail.com';
  $email_to = 'invitation@saudibanksjointreception.com';
   $headers = "From: ".$email_from;
   $headers  = "From: " . strip_tags($email_from) . "\r\n";
   $headers .= "Reply-To: " . strip_tags($email_from) . "\r\n";
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
   $msg_txt="\n\n You have recieved a new attachment message from <strong>".$email_from."</strong><br>";
   $email_txt .= $msg_txt;
   $email_txt .= '<strong>Full Name: </strong> '.$full_name.'<br>';
   if($form_type=='invitation')
   {
   $email_txt .= '<strong>Suffix: </strong> '.$suffix.'<br>';
   $email_txt .= '<strong>Company: </strong> '.$company.'<br>';
   $email_txt .= '<strong>Position: </strong> '.$position.'<br>';
   $email_txt .= '<strong>Phone Number: </strong> '.$phone_number.'<br>';
   }
   $email_txt .= '<strong>Body: </strong>'.$message_body;
   $email_message=$email_txt;
   $ok = mail($email_to, $email_subject, $email_message, $headers);
   if($ok) {
      $_SESSION["form_submit"] = "success";
      header("Location: https://saudibanksjointreception.com");
  }else {
      $_SESSION["form_submit"] = "error";
      header("Location: https://saudibanksjointreception.com");
   }
?>