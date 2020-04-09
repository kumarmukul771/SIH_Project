<!DOCTYPE html>
<html>
<head>
	<title>Success Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>

</html>

<?php
session_start();
// echo $_POST['pass'];

if(isset($_SESSION['username']))
{
	$username=$_SESSION['username'];

	$conn=new mysqli('localhost','root','','sih');

	$password = trim($_POST['pass']);
	$password = password_hash($password, PASSWORD_DEFAULT);

	$q="UPDATE administrator set password='$password' WHERE email='$username'";
	$stmt=$conn->query($q);
	if($stmt) 
	{
		?>
		<div class="container">
			<div class="jumbotron">
	        
	        <p class="lead">Password Successfully Changed!</p>
	        <p><a class="btn btn-lg btn-success" href="../index.html" role="button">Return to Login page</a></p>
	       </div>
  		</div>
      <?php
	}

	else 
	{
		?>
	<div class="container">
		<div class="jumbotron">
        
        <p class="lead">An error occured!<br>Please try again later.</p>
        <p><a class="btn btn-lg btn-success" href="../index.html" role="button">Return to Login page</a></p>
      </div>
      <?php
  }
}
else 
header("location:http://localhost/SIH/Administrator_Login/Forgot_password/Forgot_password.php");
session_destroy();
?>