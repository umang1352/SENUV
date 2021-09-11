<?php
//get data from form  
$name = $_POST['name'];
$message= $_POST['message'];
$sub=$_POST['subject'];
$to = "SENinfo2020@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $sub . "\r\n Message =". $message.";
$headers = From: "SENinfo2020@gmail.com;
CC: SENinfo2020@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank-you.php");
?>