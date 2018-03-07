<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'pawitragusti.1@gmail.com'

$message="From:$name <br />".$message;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

$headers .= 'From: <info@yourdomain.com>' . "\r\n";
$headers .= 'Cc: admin@yourdomain.com' . "\r\n";

@mail($to,$message,$headers);
if(@mail)
{
echo "Email sent successfully !!";	
}
?>