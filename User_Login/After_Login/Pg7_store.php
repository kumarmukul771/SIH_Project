<?php

	session_start();

	if( !isset( $_SESSION['email'] ) )
	header("Location: ../sign.php");

	$conn=new mysqli('localhost','root','','sih');
    
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
	
	<!-- <?php //include('../partials/Header/header.php'); ?> -->

	<?php

		if( isset($_POST['Submit']) )
		{
		

			$applicationId = rand(100000000,999999999);

			$email = $_SESSION['email'];

			// Write the commands for uploading documents
			$aadhar = $_FILES['aadhar'];
			$signature = $_FILES['signature'];
			$itr = $_FILES['ITR'];
		
			// $result = mysqli_query($conn,$sql);
			// $row = mysqli_fetch_assoc($result);	

			$sql="UPDATE userdetails SET submitted=1,pg7=1,applicationId = $applicationId where email='$email'";

			$result = mysqli_query($conn,$sql);

			if( $result )
			{
				move_uploaded_file( $aadhar['tmp_name'], "Aadhar/aadhar".$email.".jpeg" );		//$email."aadhar"
				move_uploaded_file( $signature['tmp_name'],"Signature/signature".$email.".jpeg");	//$email."signature"
				move_uploaded_file( $itr['tmp_name'],"Document/itr".$email.".pdf");		//$email."itr"

				$q="SELECT projectState FROM userdetails where applicationId=$applicationId";
				
				$res=mysqli_query($conn,$q);
				$result=mysqli_fetch_array($res);

				$projectState = $result['projectState'];
				$query="SELECT username FROM ngos WHERE state='$projectState'";
				$result=mysqli_query($conn,$query);

				$num=mysqli_num_rows($result);

				$arr=array();

				for($i=0;$i<$num;$i++)
				{
				    $ans=mysqli_fetch_array($result);
				    $username = $ans['username'];

				    array_push($arr,$username);
				}

				$ind = rand(0,2);
				$table = $arr[$ind];

				$conn=mysqli_connect("localhost","root","","ngo");

				$sql = "INSERT INTO ".$table." (applicationId,approve,accept,verify) VALUES ('$applicationId',0,0,0)";
				$result = mysqli_query($conn,$sql);

				echo "<script>alert('Your form is submitted successfully. This is your 9 digits application id: $applicationId. Please use this appliation id to track your loan progress.')</script>";
				
				echo "<script>window.open('http://localhost/SIH/User_Login/After_Login/Profile/Profile.php','_self')</script>";
			}
			else
			{
				echo "<script>alert('Your form is not submitted successfully.Please try again')</script>";
				echo "<script>window.open('http://localhost/SIH/User_Login/After_Login/Profile/Profile.php','_self')</script>";
			}
		}
		else
		{
			echo "<script>alert('Plese enter the submit button')</script>";
			echo "<script>window.open('Pg7.php','_self')</script>";
		}
	?>

	<!-- <?php //include('../partials/Footer/footer.php'); ?> -->

</body>
</html>