<?php
$obj=json_decode($_GET['x'],false);

	if(isset($ob->run == "sendOtp")
	{
        $sendmail=$obj->email;
		require 'PHPMailerAutoload.php';
			// require 'credential.php';

			$mail = new PHPMailer;

			// $mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';						  // Specify main and backup SMTP servers
			// $mail->Host = 'smtp.secure'
			// $mail->Host='localhost';
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			// $mail->SMTPAuth = false;
			// $mail->SMTPAutoTLS=false;
			$mail->Username = 'mkpubg771@gmail.com';                 // SMTP username
			$mail->Password = 'mukul3112';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom('mkpubg@gmail.com', 'MUKUL');
			$mail->addAddress($_POST['email']);     // Add a recipient

			$mail->addReplyTo('kumarmukul771@gmail.com');

			// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Here is the subject';
			$mail->Body    = '
     
            Thanks for signing up!
            Your account has been created, you can login after you have activated your account by pressing
            the url below.
             
            ------------------------
            
            ------------------------
             
            Please click this link to activate your account:
            http://localhost/SIH/Registration_From/Gunjan/activate.php?email='.$email.'&link='.$link.'
             
            ';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}	
      }
      else
      {

      }
?>