<?php

$obj=json_decode($_GET['x'],false);



	$emailId=$obj->emailss;
		// echo $obj->emails;
		$conn=new mysqli('localhost','root','','sih');
		$sql="SELECT * FROM user WHERE email='$emailId'";
		$stmt=$conn->query($sql);
		$outp=array();

		if($stmt->num_rows > 0 ) 
		{
					$result=mysqli_fetch_array($stmt);
					require 'PHPMailerAutoload.php';

					$mail = new PHPMailer;
					$otp=rand(100000,999999);
					// $mail->SMTPDebug = 4;                               // Enable verbose debug 

					$mail->isSMTP();                                      // Set mailer to use SMTP
					$mail->Host = 'smtp.gmail.com';						  // Specify main and backup SMTP servers
					
					$mail->SMTPAuth = true;                               // Enable SMTP 
					$mail->Username = 'mkpubg771@gmail.com';                 // SMTP username
					$mail->Password = 'mukul3112';                           // SMTP password
					$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, 
					$mail->Port = 587;                                    // TCP port to connect to

					$mail->setFrom('mkpubg771@gmail.com', 'MUKUL KUMAR');
					$mail->addAddress($result['email']);     // Add a recipient

					$mail->isHTML(true);                                  // Set email format to HTML

					$mail->Subject = 'SIH Sent you OTP';
					$mail->Body    = 'Your one time password is '.$otp;
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

					
					$outp['otp']=$otp;

					if(!$mail->send()) 
					{
						$outp['ind']=-2;
					    // echo 'Message could not be sent.';
					     // echo 'Mailer Error: ' . $mail->ErrorInfo;
					} 
					else
					{
						$outp['ind']=1;
					}
		}
		 else
			$outp['ind']=-1;
		echo json_encode($outp);


?>