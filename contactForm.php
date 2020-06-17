<?php
  $name = $_POST['contact_name'];
  $visitor_email = $_POST['contact_email'];
  $message = $_POST['contact_message'];
  $to = "Richmond.action.alliance@gmail.com";
  $email_from = 'Richmond.action.alliance@gmail.com';
  

  $email_subject = "New Form submission";

  $email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
  $headers = "From: $email_from \r\n";
  
  $headers .= "Reply-To: $visitor_email \r\n";
  
  mail($to,$email_subject,$email_body,$headers);
   
?>