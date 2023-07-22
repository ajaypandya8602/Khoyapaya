<?php
session_start();
include_once("config.php");
if(isset($_POST['login_button']))
{
	$khoyapaya_email = trim($_POST['khoyapaya_email']);
	$khoyapaya_password = trim($_POST['khoyapaya_pword']);
	$khoyapaya_password = sha1($khoyapaya_password);
	
   
   	   	$sql = "SELECT * FROM registration WHERE Email_Id='$khoyapaya_email'";
   	   	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
   	   	$row = mysqli_fetch_assoc($resultset);
        $_SESSION['Id']=$row['U_id'];
       	if($row['Password']==$khoyapaya_password AND $row['Isactive']==1)
      	{        
        	$_SESSION['khoyapaya_login_user']=$khoyapaya_email;
            if ($row['Acc_Type']==0)
            {    
                $_SESSION['user']=0;
                   $response=array(
                 'msg'=>'ok', // Second Value 
                 'user'=>0);
              header("Content-Type: application/json");              
              echo json_encode($response);     
            }
            else if($row['Acc_Type']==1)
            {
                 $_SESSION['user']=1;
                  $response=array(
                 'msg'=>'ok', // Second Value 
                 'user'=>1);
            	header("Content-Type: application/json");              
            	echo json_encode($response);     
            }
            else if($row['Acc_Type']==2)
            {
                   $_SESSION['user']=2;
                  $response=array(
                 'msg'=>'ok', // Second Value 
                 'user'=>2);
            	header("Content-Type: application/json");              
            	echo json_encode($response);     
            }
           	else
       		{  
               
                $response=array(
                 'msg'=>'email or password does not exist.', // Second Value 
                 'user'=>3);
				header("Content-Type: application/json");              
				echo json_encode($response);       
       		} 
      	} 
      	else
       	{  
            $response=array(
             'msg'=>'email or password does not exist.', // Second Value 
             'user'=>3);
			header("Content-Type: application/json");              
			echo json_encode($response);       
	    } 
 	
}

?>




