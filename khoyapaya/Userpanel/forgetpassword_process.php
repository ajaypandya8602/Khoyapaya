<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
session_start();

// Load Composer's autoloader
require 'vendor/autoload.php';
require_once('config.php');

	$username=$_POST['reset'];
	$sel_query=mysqli_query($conn,"SELECT U_id FROM registration WHERE Email_Id='$username' or Mobile_NO='$username'");
	while($ROW=mysqli_fetch_array($sel_query))
	{
		global $Uid;
	    $Uid=$ROW['U_id'];
	}

	if(mysqli_num_rows($sel_query)==0)
	{
		echo '0';
	}
	else
	{
		$emailpattern= '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix';
		$mobilepattern= "/^[6-9][0-9]{9}$/";
		if(preg_match($emailpattern, $username))
		{
			$mail = new PHPMailer(true);
			$rndno=rand(100000, 999999);

			    $to = $username;
			    $sub = "OTP";
			    $msg =$rndno." is your OTP to reset your Password";

			try {
			   
			   /* $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output*/
			    $mail->isSMTP();                                            // Send using SMTP
			    $mail->Host= 'smtp.gmail.com';                    // Set the SMTP server to send through
			    $mail->SMTPAuth = true;                                   // Enable SMTP authentication
			    $mail->Username = 'khoyapaya5340@gmail.com';              
			    $mail->Password = 'Khoyapaya@5340**';                                 // SMTP password
			    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
			    $mail->Port= 587;                                    // TCP port to connect to

			    //Recipients
			    $mail->setFrom('khoyapaya5340@gmail.com');
			   // $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
			    $mail->addAddress($to);               // Name is optional
			    $mail->addReplyTo('khoyapaya5340@gmail.com');
			    $mail->addCC($to);
			    $mail->addBCC($to);

			    // Attachments
			  //$mail->addAttachment('pdf/mypdf.pdf');         // Add attachments
			  /*  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    */// Optional name

			    // Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = $sub;
			    $mail->Body    = $msg;
			    $mail->AltBody = $msg;

			    $mail->send();
			} catch (Exception $e) {
			    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}
			$_SESSION['forget_user']=$username;		
			$_SESSION['otp']=sha1($rndno);				
		}
		elseif (preg_match($mobilepattern, $username))
		{
			$rndno=rand(100000, 999999);
			$field = array(
			    "sender_id" => "FSTSMS",
			    "language" => "english",
			    "route" => "qt",
			    "numbers" => $username,
			    "message" => "21743",
			    "variables" => "{#BB#}",
			    "variables_values" => $rndno
			);

			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_SSL_VERIFYHOST => 0,
			  CURLOPT_SSL_VERIFYPEER => 0,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_POSTFIELDS => json_encode($field),
			  CURLOPT_HTTPHEADER => array(
			    "authorization: OuvLru5Uri62GWHs9i1NJZSknYhAS4yiXp6u3gIMG1MJAEgPifkWBsi8GU0i",
			    "cache-control: no-cache",
			    "accept: */*",
			    "content-type: application/json"
			  ),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);
			$_SESSION['forget_user']=$username;				
			$_SESSION['otp']=sha1($rndno);				
		}
		echo $username;	
	}
	/*while($ROW=mysqli_fetch_array($sel_query))
	{
		global $Uid;
	    $Uid=$ROW['U_id'];
	}
	$emailpattern= '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix';
	$mobilepattern= "/^[6-9][0-9]{9}$/";
	if(preg_match($emailpattern, $username))
	{
		echo "email";
	}
	elseif (preg_match($mobilepattern, $username))
	{
		echo "mobile";
	}
	else
	{
		echo "none";
	}*/
?>