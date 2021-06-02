<?php
//get data from form

$name = $_POST['name'];
$number= $_POST['mobile'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "your@gmail.com";
$subject = "Mail From Akhila beauty studio";
$txt ="Name = ". $name . "\r\n Phone Number=". $number ."\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: akhila@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
