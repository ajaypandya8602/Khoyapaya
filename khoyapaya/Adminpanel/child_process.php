<?php
    include_once('config.php');
?>
<?php

	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	
	$aboutc=$_POST['aboutc'];
	$dob1=$_POST['dob'];

	$x=strtotime($dob1);
   
  
    
    $day=date('d',$x);
    $month=date('m',$x);
    $year=date('y',$x);


    $current_date = date('d'); 
    $current_month = date('m'); 
    $current_year = date('y'); 

    $all_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 );
    $age = $current_year -   $year."Year"; 
    if($age == 0)
    {
	    if ($month > $current_month) 
	    { 
	        $current_year = $current_year - 1; 
	        $current_month = $current_month + 12; 
	        $age = $current_month - $month."Month";

	    } 

	    
	    else if ($day > $current_date)  
	    { 
	        $current_date = $current_date +  $all_month[$month - 1];             
	        $current_month = $current_month - 1; 
	        $age = $current_date - $day."Days";
	       
	       
	    } 
	 }
   	//-------------------age---------------------------

	//--------------------------gender--------------------------------------
	$gndr1=$_POST['Gender'];
	$gndr="";
	if ($gndr1 == 'Male') 
	{
		$gndr=$gndr1;
	}
	else if($gndr1 == 'Female') 
	{
		$gndr=$gndr1;
	}
	else if ($gndr1 == 'Other') 
	{
		$gndr=$gndr1;
	}
	//-----------------------------------------------------------------
	
	$hby="";
	if(isset($_POST['hby'])) 
		{
			foreach($_POST['hby'] as $v) 
			{
				$hby .= $v.", ";
			}
			$hobb=substr($hby,0,-2);
		}
		

	
	//-----------------------------------inserting values-------------------------
	if($_POST['submit'])
	{
		$ins=mysqli_query($conn,'INSERT INTO ADD_CHILD(FNAME,LNAME,DOB,GENDER,AGE,HOBBY,ABOUT_CHILD)VALUES ("'.$fname.'","'.$lname.'","'.$dob1.'","'.$gndr.'","'.$age.'","'.$hobb.'","'.$aboutc.'")');

		if ($ins) 
		{
			echo "<script>alert('inserted successfully')</script>";
		}
	}
?>