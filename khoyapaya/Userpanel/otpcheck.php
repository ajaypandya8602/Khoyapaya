<?php
require_once('config.php');
session_start();
$otp=$_POST['otp'];
if(isset($_POST['otp_button']))
{
      if($_SESSION['otp']==sha1($otp))
      {       
        echo "ok";
      }
      else
      {        
        echo "Wrong OTP";
      } 

}
?>