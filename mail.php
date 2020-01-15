<?php
$to = "nishantt50@gmail.com";
$subject ="Subject here";
$message="Message here";
$header="From: yogendra@playonlinesmatk.in";

if(mail($to, $subject, $message,$headers)){
	echo "Mail sent";
}
else{
	echo "cannot send";
}
?>