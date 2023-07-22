<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

session_start();
	$Subject=$_POST['Subject'];
	$Message=$_POST['Message'];
	$user=$_SESSION['user'];
	$Id=$_SESSION['Id'];
	$email=$_SESSION['khoyapaya_login_user'];
		
	$ins_query=mysqli_query($conn,"INSERT INTO contact_master (`id`, `user`, `Subject`, `Description`) VALUES ('".$Id."', '".$user."', '".$Subject."','".$Message."')");
/*	echo "<script type='text/javascript'>alert(".'Your Contact Request sent to orphanage they will contact you soon in mail '.");</script>";*/
	if ($ins_query)
	{
		/*echo "Your Contact Request has been sent !!";	*/
		echo '1';
	}
	else
	{
		/*echo "Something went to wrong ";		*/
		echo '0';
	}



	//mail test
	$sendsub="Contact For: $Subject";
	$sendmsg=$email . "  wants to contact you :"."<strong>".$Message."</strong>";


	$mail = new PHPMailer(true);

			    $to = "khoyapaya5340@gmail.com";

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
			    $mail->Subject = $sendsub;
			    $mail->Body    = $sendmsg;
			    $mail->AltBody = $sendmsg;

			    $mail->send();
			} catch (Exception $e) {
			    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}

?>
