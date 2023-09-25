<?php
$name=$_POST['name'];

$email=$_POST['email'];
$phone=$_POST['phone'];

$message=$_POST['message'];
$to="lavanyapalnati02@gmail.com";
$subject="Mail from website";


$headers="From: " .$name. "\r\n" .
"CC: siva@creativeethics.com";

$txt="You have received an email from " .$name ."\r\nName: " .$name  ."\r\nEmail: "  .$email  ."\r\nPhone No.: " .$phone  ."\r\nMessage: ".$message;


if($email=!NULL){
    mail($to, $subject, $txt, $headers );
}

header('Location:thankyou.html');

?>