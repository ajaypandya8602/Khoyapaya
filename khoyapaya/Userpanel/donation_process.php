<?php
require_once('config.php');
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$no = $_POST['no'];

	$Amount = $_POST['Amount'];

	$cardno = $_POST['cardno'];
	$dm = date('M-Y',strtotime($_POST['dm']));
	$cvv = $_POST['cvv'];

	$ins_query=mysqli_query($conn,"INSERT INTO donation_master(Fname, Lname, Email_Id, Mobile_No, Donation_Amount, Card_no, expire_DM) VALUES ('".$fname."','".$lname."','".$email."',$no,$Amount,$cardno,'".$dm."')"); 


?>