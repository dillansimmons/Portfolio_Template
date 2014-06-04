<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n Message: $message";
$recipient = "YOUREMAIL GOES HERE";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<div align='center' v-align='middle' style='padding-top:20px; font:54px Helvetica,Arial,serif; color:#3eaee6;'>MESSAGE SENT!</div>" . " <br />" . "<div align='center'><p style='text-decoration:none;color:#999999;  font:24px Helvetica,Arial,serif;'> I'll get back to you as soon as I can. <br /> -Dillan <br /></p></div>" . " <br />" . "<div align='center'><a href='index.html' style='text-decoration:none;color:#336E7B;  font:34px Helvetica,Arial,serif;'> Return To Website</a></div>";
?>
