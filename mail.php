<?php
//get data from form  

$name = $_POST['Name'];
$email= $_POST['Email'];
$message= $_POST['Message'];
$to = "thsvarappetty@gmail.com";
$subject = "Mail From GTHS Adimali";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: admin@gthsadimali.in" . "\r\n" .
"CC: thsvarappetty@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>