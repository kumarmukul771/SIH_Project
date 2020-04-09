<?php

	session_start();
	
	include('../partials/Connection/connection.php');
    
?>

<!DOCTYPE html>
<html>
<head>

	<title>Application Status</title>
	
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

		if( isset( $_POST['trackStatus'] ) )
		{
			$applicationId = trim( $_POST['applicationId'] );

			$sql = "SELECT * from userdetails where applicatioId = '$applicationId'";
			$result = mysqli_query($conn,$sql);

			$row = mysqli_fetch_assoc($result);
			$total_rows = mysqli_num_rows($result);

			if( $total_rows )
			{ 
				$email = $row['email'];
				$state = $row['applicantState'];
				$city = $row['applicantCity'];

				$sql = "SELECT * from user where email = '$email'";
				$result = mysqli_query($conn,$sql);

				$row = mysqli_fetch_assoc($result);

				$name = $row['name'];

			?>

				<div class="conatiner">
					<h2>Name: <?php echo $name; ?></h2>
					<h2>City: <?php echo $city; ?></h2>
					<h2>State: <?php echo $state; ?></h2>
				</div>
	<?php
			}
			else
			{
				echo "<script>alert('Invalid application id')</script>";
				echo "<script>window.open('App_status.php','_self')</script>";
			}
		}
		else
		{
			echo "<script>alert('Please enter your application id')</script>";
			echo "<script>window.open('App_status.php','_self')</script>";
		}
	?>

	<?php include('../partials/Footer/footer.php'); ?>

</body>
</html>