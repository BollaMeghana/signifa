<?php

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$MobileNo = $_POST['MobileNo'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];
$to = "nagojudurgamallesh@gmail.com";

$subject = "Mail from website";

$headers = "From: " .$FirstName. "\r\n" ."CC: durgamalleshnagoju@gmail.com";

$txt = "You have recieved an email from ".$FirstName ."\r\nEmail: ".$Email."\r\nMessage: ".$Message;
header('Location:http://creativeethics.co.in/signifa/thankyou.html');
if(mail($to, $subject, $txt, $headers)) {
    
    echo "thank you for sending mail";
}
header('Location:http://creativeethics.co.in/signifa/thankyou.html');

?>