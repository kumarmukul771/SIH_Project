<?php

	session_start();

	if( !isset( $_SESSION['emial'] ) )
	header("Location: ../sign.php");

	include('../partials/Connection/connection.php');
    
?>

<!DOCTYPE html>
<html>
<head>

	<title>Last Page</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../../partials/css/footer.css">
	<link rel="stylesheet" type="text/css" href="../../partials/css/header.css">

</head>

<body>
	
	<?php include('../partials/Header/header.php'); ?>

	<?php

		if( isset($_POST['submit']) )
		{
			$sql = "";

			$applicationId = rand(9,9);

			$email = $_SESSION['email'];

			// Write the commands for uploading documents
			$aadhar = $_FILES['aadhar'];
			$signature = $_FILES['signature'];
			$itr = $_FILES['ITR'];
		
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);	

			$sql="UPDATE userdetails SET submitted=1,applicationId = $applicationId where email='$email'";
			$result = mysqli_query($conn,$sql);

			if( $result )
			{
				move_uploaded_file( $aadhar['tmp_name'], destination );		//$email."aadhar"
				move_uploaded_file( $signature['tmp_name'], destination );	//$email."signature"
				move_uploaded_file( $itr['tmp_name'], destination );		//$email."itr"
	?>

				<div class="container">
					<div class="alert alert-success">
						Your form has been submitted successfully.
						This is your's 9 digits application id: <?php echo $applicationId; ?>.
						Please use this appliation id to track your loan progress.
					</div>
				</div>
	<?php	
			}
			else
			{
				echo "<script>alert('Your form is not submitted successfully.Please try again')</script>";
				echo "<script>window.open('Pg7.php','_self')</script>";
			}
		}
		else
		{
			echo "<script>alert('Plese enter the submit button')</script>";
			echo "<script>window.open('Pg7.php','_self')</script>";
		}
	?>

	<?php include('../partials/Footer/footer.php'); ?>

</body>
</html>