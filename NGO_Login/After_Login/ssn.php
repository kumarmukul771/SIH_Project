<?php
session_start();
$username=$_SESSION['username'];
$conn=new mysqli('localhost','root','','sih');
$conn2=new mysqli('localhost','root','','ngo');
?>
