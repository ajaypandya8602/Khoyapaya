<?php
require("config.php");
	$email= $_POST['emailid'];
  
 	   	$sql = "SELECT  count('Email_Id') FROM registration WHERE Email_Id like '$email'";
 	   	$result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
      $row = mysqli_fetch_array($result);
      $total = $row[0];
     	if($total>=1)
    	{        
      	 echo 1;
    	} 
    	elseif ($total<=0)
     	{                
		     echo 0;
      } 
      // /echo $total;

?>




