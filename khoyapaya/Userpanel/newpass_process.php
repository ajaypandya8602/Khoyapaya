<?php
include_once("config.php");
session_start();
$username=$_SESSION['forget_user'];
  $password = trim($_POST['password']);
  $password=sha1($password);
  $upd_query=mysqli_query($conn,"UPDATE registration set Password= '$password' WHERE Email_Id='$username' or Mobile_NO='$username'");
	echo "Password Changed Successfully !";	
?>