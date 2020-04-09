<?php
session_start();

$emailId=trim($_POST['emailId']);
$password=trim($_POST['password']);



$conn=new mysqli('localhost','root','','sih');
$sql="SELECT * FROM user WHERE email='".$emailId."'";
$stmt=$conn->query($sql);

// echo $result['email'];

$f=0;

if($stmt->num_rows > 0)
{
	$result=mysqli_fetch_array($stmt);
	if($result['status']==1 && password_verify($password,$result['password']))
	{
		$_SESSION['email']=$emailId;
		$_SESSION['userid']=$result['userid'];
		$f=1;
	}
}

if($f==1)
{
	header('location:http://localhost/SIH/User_Login/After_Login/Profile/Profile.php');
}
else
{
echo $emailId."wrong id";
session_destroy();
}

?>