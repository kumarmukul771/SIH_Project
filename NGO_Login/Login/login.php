<!DOCTYPE html>
<html>
<head>
	<title>Login Failed</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

</body>
</html>

<?php
if(isset($_POST["submit"]))
{
	

$conn=new mysqli('localhost','root','','sih');

	var_dump($_POST);
	$username=$_POST['username'];
	$Password=$_POST['password'];

	$q="SELECT * from ngos where username='$username'";
	$stmt=$conn->query($q);

	if($stmt->num_rows > 0)
	{
		$result=mysqli_fetch_array($stmt);
		if(password_verify($Password, $result['password']))
		{
			session_start();
			$_SESSION['username']=$username;
			header('location:http://localhost/SIH/NGO_Login/Login/Profile/profile.php');
		}
		else
		{
			?>
			<div class="container">
			<div class="jumbotron">
	        
	        <p class="lead"><?php echo 'Invalid Username or password'; ?></p>
	        <p><a class="btn btn-lg btn-success" href="http://localhost/SIH/NGO_Login/Login/login.html" role="button">Return to Login Page</a></p>
	       </div>
  		</div>
  		<?php 
		}

	}
	else 
	{
		?>
		<div class="container">
			<div class="jumbotron">
	        
	        <p class="lead"><?php echo 'Invalid Username or password'; ?></p>
	        <p><a class="btn btn-lg btn-success" href="http://localhost/SIH/NGO_Login/Login/login.html" role="button">Return to Login Page</a></p>
	       </div>
  		</div>
  		<?php 
	}
	
   

 }
else
{
		header('location:http://localhost/SIH/NGO_Login/Login/login.html');
}




?>

