<?php
	require_once('config.php');
	$fullname=$_POST['fullname'];
	$email=$_POST['khoyapaya_email'];
	$uid=$_POST['uid'];
	$Acc_Type=$_POST['Acc_Type'];
	$no=$_POST['no'];
	$gender=$_POST['gender'];
	$income=$_POST['income'];
	$address=$_POST['address'];
	$state=$_POST['state'];
	$city=$_POST['city'];	
	$Path=$_POST['profile_img'];	
	if ($_FILES['pro_img']['size'] == 0/* && $_FILES['cover_image']['error'] == 0*/)
	{
	$upd_query=mysqli_query($conn,"UPDATE registration set Full_Name='$fullname', Email_Id='$email', Mobile_No='$no', Gender='$gender', Income='$income', Address='$address', State_Id='$state', City_Id='$city',Profile_Img= '$Path',D_Update=NOW() Where U_Id='$uid'");	
	
		
	}
	else
	{
		$info = pathinfo($_FILES['pro_img']['name']);
		$ext = $info['extension']; // to get an extension of the file
		$newname = $uid."_".$fullname.'.'.$ext; 
		if ($Acc_Type == 1)
		{
			$target = 'img_all/Adpoter/'.$newname;
			move_uploaded_file($_FILES['pro_img']['tmp_name'], $target); 
			$Path="img_all/Volunteer/".$newname;	
		}
		else
		{
			$target = 'img_all/Volunteer/'.$newname;
			move_uploaded_file($_FILES['pro_img']['tmp_name'], $target); 
			$Path="img_all/Volunteer/".$newname;
		}
		$upd_query=mysqli_query($conn,"UPDATE registration set Full_Name='$fullname', Email_Id='$email', Mobile_No='$no', Gender='$gender', Income='$income', Address='$address', State_Id='$state', City_Id='$city',Profile_Img= '$Path',D_Update=NOW() Where U_Id='$uid'");	
	}
	


?>