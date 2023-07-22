<?php
	    require_once('config.php');
	$fullname=$_POST['fullname'];
	$email=$_POST['khoyapaya_email'];
	$pword=$_POST['khoyapaya_pword'];
	$no=$_POST['no'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$security=$_POST['security'];
	$ans=$_POST['ans'];



	$ins_query=mysqli_query($conn,"INSERT INTO volunteer_master(Full_Name, Password, Email_Id, Mobile_No, Gender, Address, Security_Id, Answer) VALUES ('$fullname','$pword','$email','$no','$gender','$address','$security','$ans')"); 
	$Vid=mysqli_insert_id($conn);
  
   	$info = pathinfo($_FILES['pro_img']['name']);
	$ext = $info['extension']; // to get an extension of the file
	$newname = $Vid."_".$fullname.'.'.$ext; 
	$target = 'img_all/Volunteer/'.$newname;
	move_uploaded_file($_FILES['pro_img']['tmp_name'], $target); 

	$upd_query=mysqli_query($conn,"UPDATE volunteer_master set Profile_Img= '$newname' Where V_Id='$Vid'");
	header('location:login.php');
?>