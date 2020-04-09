<?php  
	
	session_start();
	
	$conn=new mysqli('localhost','root','','sih');
	
	if( isset($_POST['submit']) && !empty($_POST['submit']) )
	{
		$name = trim($_POST['name']);

		$password = trim($_POST['password']);
		$password = password_hash($password, PASSWORD_ARGON2I);
		
		$phone = trim($_POST['phone']);
		$email = $_SESSION['email'];
		
		$sql = "UPDATE user SET name='$name' , password='$password', phone='$phone' where email='$email'";

		$result = mysqli_query($conn,$sql);
		mysqli_close($conn);

		echo '<div class="alert alert-success">Your profile updated successfully</div>';
	}
?>