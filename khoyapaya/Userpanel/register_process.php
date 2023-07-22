<?php
    require_once('config.php');
	$user=$_POST['user'];
	$fullname=$_POST['fullname'];
	$email=$_POST['khoyapaya_email'];
	$pword=sha1($_POST['khoyapaya_pword']);
	$no=$_POST['no'];
	$gender=$_POST['gender'];
	$income=$_POST['income'];
	$address=$_POST['address'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$Uid;
	$Path;

	$ins_query=mysqli_query($conn,"INSERT INTO registration(Full_Name, Password, Email_Id, Mobile_No, Gender, Income, Address, State_Id, City_Id, Acc_Type) VALUES ('$fullname',sha1('$pword'),'$email','$no','$gender','$income','$address','$state','$city','$user')"); 
	if ($ins_query)
	{
    	$Uid = mysqli_insert_id($conn);
	}
	else
	{
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	/*echo $Uid;*/
	if($_FILES['pro_img']['size'] != 0/* && $_FILES['cover_image']['error'] == 0*/)
	{
	  	$info = pathinfo($_FILES['pro_img']['name']);
		$ext = $info['extension']; // to get an extension of the file
		$newname = $Uid."_".$fullname.'.'.$ext; 
		if ($user == 1)
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
		$upd_query=mysqli_query($conn,"UPDATE registration set Profile_Img= '$Path' Where U_Id='$Uid'");
	}
	else
	{
		$upd_query=mysqli_query($conn,"UPDATE registration set Profile_Img= 'img_all/unknown.png' Where U_Id='$Uid'");
	}
	header('location:login.php');
?>
