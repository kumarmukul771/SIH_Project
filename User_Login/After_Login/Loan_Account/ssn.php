<?php 

session_start();
$email=$_SESSION['email'];
$conn=new mysqli('localhost','root','','sih');
$q="SELECT * from userdetails WHERE email='$email'";
$st=$conn->query($q);
$result=mysqli_fetch_array($st);
$conn=new mysqli('localhost','root','','account');

if($result['loanAccountNumber']!=0)
{
$sql="SELECT * FROM loan".$result['loanAccountNumber'];
$stmt=$conn->query($sql);
$res=mysqli_fetch_array($stmt);
}
?>