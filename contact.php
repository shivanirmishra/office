<?php

if( isset($_POST['Submit']) ) {

$firstname =$_POST["First Name"];
$lastname = $_POST["Last Name"];
$email=$_POST["Email"];

$subject=$_POST["Subject"];
$message=$_POST["Message"];
$header="from: $name <$mail_from>";

// Enter your email address
$to ='shivanirmishra007@gmail.com';

$send_contact=mail($to,$subject,$message,$header);
}
// Check, if message sent to your email
// display message "We've recived your information"
if($send_contact){
echo "We've recived your contact information";
}
else {
echo "ERROR";
}
?>