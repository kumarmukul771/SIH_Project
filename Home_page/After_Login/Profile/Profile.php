<?php
session_start();
if(!isset($_SESSION['email']))
 header('location:http://localhost/SIH/User_Login/index.html');
else
{
?>
<!DOCTYPE html>
<html>
<head>

	<title>Profile Page</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body>

	<div class="container main">
		
		<div class="row head">
			<div class="col-xs-12 img1">
			 	<img src="anime-4k-hd-background-download-wallpaper-preview.jpg" id="i1">
			</div>

			<h1>Lone Wolf 3112</h1>	
			<h3>India</h3>	
		</div>
		<br>
		<div class="row btnmukul">
			<div class="col-xs-4">
		           <a href="../Pg1.php"><button class="button button-2 button-2d">Loan application</button></a>
		    </div>
			<div class="col-xs-4">
				<button class="button button-2 button-2d">Application status</button>
			</div>
			<div class="col-xs-4">
				<button class="button button-2 button-2d">Change password</button>
			</div>
		</div>

		<div class="row btnmukul">
			<div class="col-xs-4">
		            <button class="button button-2 button-2d">Guidelines</button>
		    </div>
			<div class="col-xs-4">
				<button class="button button-2 button-2d">Edit Profile</button>
			</div>
			<div class="col-xs-4">
				<button class="button button-2 button-2d">Grievance</button>
			</div>
		</div>

	</div>

</body>
</html>

<?php
}
?>