<!DOCTYPE html>
<html lang="en">



<head>
<title>Daf technical services llc</title>
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8"/>
<meta HTTP-EQUIV="refresh" CONTENT="0;URL='http://www.daftechnicalservices.com/thankyou.html'">
 
</head>

<body>
<?php
   session_start();
  $receiving_email_address = 'daftech.service@gmail.com';
  
  $to = $_POST['name'];
  $from_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message =  $_POST['message'];
  
  $headers = "From:". $from_email;
  $sent = mail($receiving_email_address, $subject, $message, $headers) ; 

if($sent) {
    header("Location: https://www.daftechnicalservices.com/thankyou.html");
} else {
   header("Location: https://www.daftechnicalservices.com/index.html");
} 
?>

</body>
</html>
