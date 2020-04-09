<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

</body>
</html>

<?php  
	
	require_once('partials/Connection.php');
	// include_once('partials/Header.php');

		$first = trim($_POST['firstName']);
		$last = trim($_POST['lastName']);

		$middle = "";
		$name="";
		if( isset($_POST['middleName']) and !empty($_POST['middleName']) )
		{
		$middle = trim($_POST['middleName']);
		$name = $first." ".$middle." ".$last;
		}
		else
			$name = $first." ".$last;

		$email = trim($_POST['email']);
		
		

		$password = trim($_POST['password']);
		$password = password_hash($password, PASSWORD_DEFAULT);

		$link = md5(rand(0,1000));
		$status = 0;
		$phoneVerified = 0;
		
		$phone2 = $_POST['phone'];
		$phone=strval($phone2);
		// echo $name;
		

		include_once('mail.php');
		 if(!$mail->send()) {
		 	?>
		 	<div class="container">
			<div class="jumbotron">
	        
	        <p class="lead">
	        	<?php 
	        	echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
           
            else {
            	$sql = "INSERT into user(name,email,password,phone,phoneverified,link,status) 
				values('$name','$email','$password',$phone,$phoneVerified,'$link',$status)";

				

				$result = mysqli_query($conn,$sql);
				
				
				mysqli_close($conn);
?>
                 	<div class="container">
			<div class="jumbotron">
	        
	        <p class="lead"><?php echo 'Message has been sent!<br>Please check your email for successfull registration'; ?></p>
	        <p><a class="btn btn-lg btn-success" href="http://localhost/SIH/Registration_From/Register.php" role="button">Return to Home page</a></p>
	       </div>
  		</div>
               <?php 
            }   
	

	// include_once('partials/footer.php');
?>