<?php


					require 'PHPMailerAutoload.php';

					$mail = new PHPMailer;
					// $mail->SMTPDebug = 4;                               // Enable verbose debug 

					$mail->isSMTP();                                      // Set mailer to use SMTP
					$mail->Host = 'smtp.gmail.com';						  // Specify main and backup SMTP servers
					
					$mail->SMTPAuth = true;                               // Enable SMTP 
					$mail->Username = 'mkpubg771@gmail.com';                 // SMTP username
					$mail->Password = 'mukul3112';                           // SMTP password
					$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, 
					$mail->Port = 587;                                    // TCP port to connect to

					$mail->setFrom('mkpubg771@gmail.com', 'MUKUL KUMAR');
					$mail->addAddress($email);     // Add a recipient

					$mail->isHTML(true);                                  // Set email format to HTML

					$mail->Subject = 'noReply SIH';
					$mail->Body    = 'Congratulations! '.$name."Your request for loan of amount ".$loanAmount" has been accepted.Amount mentioned will be transferred to registered account within 7 working days.";
					$mail->AltBody = 'Thank You for choosing our portal.';

					if(!$mail->send()) 
					{
					    echo 'Message could not be sent.';
					     echo 'Mailer Error: ' . $mail->ErrorInfo;
					} 
					


?>