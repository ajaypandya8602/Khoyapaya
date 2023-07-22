<?php
	require_once('config.php');
	$A_id=$_POST['A_id'];
	mysqli_query($conn,'DELETE FROM `appointment_master` WHERE A_id="'.$A_id.'"');
	header('location:user_profile.php');	
?>
