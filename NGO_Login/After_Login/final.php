<?php

	session_start();

	$conn = new mysqli('localhost','root','','ngo');

	$table = $_SESSION['username'];
	$sql = "SELECT *from $table";
    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);

    $applicationId = $row['applicationId'];
?>

<!DOCTYPE html>
<html>
<head>

	<title></title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../partials/css/footer.css">
	<link rel="stylesheet" type="text/css" href="../partials/css/header.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div class="container">
		<div class="jumbotron" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);">
			
			<h2>Final Confirmation</h2>

			<form method="post" action="http://localhost/SIH/Home_page/After_Login/Accepted/accepted.php">
				<input type="text" name="applicationId" value="<?php echo $applicationId; ?>">
				<button class="btn btn-danger" type="submit">Finialise this applicant</button>
			</form>
		</div>
	</div>
</body>