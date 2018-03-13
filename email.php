<?php
if(isset($_POST['submit'])
{
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$to='pawitragusti.1@gmail.com';

$message='From:$name <br/ >' .$message;

$headers .= 'From: <info@yourdomoain.com>' ."\r\n";
$headers .= 'Cc: admin@yourdomoain.com' ."\r\n";
@mail($to,$email,$phone,$message);
if(@mail)
{
	echo "Email sent successfully!!"
}	
}


?>
