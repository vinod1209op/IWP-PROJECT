<?php
session_start();
if($_POST['otp']==$_SESSION['otp'])
{
	$_SESSION['login']='yes';
	header("refresh:2; url=../html/employee/profile.php");
}
else
{
	echo "incorrect otp try again";
	header("refresh:2; url=../html/login.html");
}
?>