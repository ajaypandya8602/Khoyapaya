<?php
	require_once('config.php');
	session_start();
	$CID=$_POST['cid'];
	//echo $CID;
	
	$email=$_SESSION['khoyapaya_login_user'];


	$sel_query=mysqli_query($conn,"SELECT U_id FROM registration WHERE Email_Id='$email'");
	while($ROW=mysqli_fetch_array($sel_query))
    {
    	global $Uid;
	    $Uid=$ROW['U_id'];
	    //echo "INSERT INTO appointment_master(U_id,C_id) VALUES ('$Uid','$CID)";
	   $ins_query=mysqli_query($conn,"INSERT INTO appointment_master(U_id,C_id) VALUES ('$Uid','$CID')");
	    header('location:user_profile.php');
    }
?>