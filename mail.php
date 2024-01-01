<?php
if(isset( $_GET['name']))
$name = $_GET['name'];
if(isset( $_GET['email']))
$email = $_GET['email'];


$content="From: $name";
$recipient = "namoz.lalisa4@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>
