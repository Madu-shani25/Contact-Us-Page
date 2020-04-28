<?php
   $name=$_POST['name'];
   $email=$_POST['email'];
   $messege=$_POST['messege'];
    
   $mail_from='$email';

   $mail_topic="new application submission";

   $email_body="User Name: $name. \n". "User email: $email. \n". "User Messege: $messege. \n";

   $to="maduwanthi2563@gmail.com";

   $headers= "From: $mail_from \r\n";

   $headers= "Reply To: $email \r\n";

   mail($to, $mail_topic, $email_body, $headers );

   header("Location: gets.html");


   


?>