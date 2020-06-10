
<?php

if( isset($_POST['Submit']) ) {

$firstname =$_POST["firstname"];
$lastname = $_POST["lastname"];
$email=$_POST["email"];

$std=$_POST["std"];
$msg=$_POST["msg"];


// Enter your email address
$to ='shivanirmishra007@gmail.com';
$subject='Form Submission';
$message="First Name : ".$firstname."\n". "Last Name :" .$lastname."\n". "Standard :" .$std."\n". "Wrote the following :" ."\n\n".$msg;
$header="From : ".$email;

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
