<?php
 
if(isset($_POST['submitbtn']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['mobile'];
  $message=$_POST['message'];
	

  $to = "info@nammainterior.com";
  //$to = "pintukumareinst@gmail.com";
  $subject = "Nammainterior -Enquiry";
  
$message1 = '
<html> 
<head>
<title>Nammainterior</title>
</head>
<body style="background-color: #ffe6ff;">
<br>
<h2 style="color: #33bbff;">Nammainterior - Enquiry</h2>

<ul style="list-style-type:square; color: #3399ff;"> 
  <h3><li>Name : '.$name.'</li></h3>
  <h3><li>Email : '.$email.'</li></h3>
  <h3><li>Mobile : '.$phone.'</li></h3>
  <h3><li>Message : '.$message.'</li></h3>
</ul>

<h4 style="color: grey;">Thank you<br>Nammainterior Team</h4>
<br>
    
</body> 
</html>
';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Nammainterior <info@nammainterior.com >' . "\r\n";
   
  if(mail($to,$subject,$message1,$headers))
  {
    echo '<script type="text/javascript">';
    echo 'alert("Your message was sent successfully");'; 
    echo 'window.location.href = "modular-kitchens-service.html";';
    echo '</script>';
  }
  else
  {
    echo '<script type="text/javascript">'; 
    echo 'alert("Error! Please try again");'; 
    echo 'window.location.href = "modular-kitchens-service.html";';
    echo '</script>';
  }
}

?>