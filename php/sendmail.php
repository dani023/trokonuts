<?php
// Email Submit

  $name = @trim(stripslashes($_POST['name'])); 
  $email = @trim(stripslashes($_POST['email']));  
  $subject = @trim(stripslashes($_POST['subject']));  
  $message = @trim(stripslashes($_POST['message'])); 

  $email_from = $email;
  $email_to = 'envalabteam@gmail.com'; //replace with your email

  $message = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

  $success = @mail($email_to, "[The FarmHouse] ".$subject, $message);

  $noreply = @mail($email_from, "[The FarmHouse] Thank you", "We will be back to you soon!");
?>