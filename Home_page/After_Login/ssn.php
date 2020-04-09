<?php 

session_start();
        
$email=$_SESSION['email'];
$conn=new mysqli('localhost','root','','sih');
$sql="SELECT * FROM user where email='".$email."'";
$stmt=$conn->query($sql);
$res=mysqli_fetch_array($stmt);

$q="SELECT * from userdetails WHERE email='$email'";
$st=$conn->query($q);
$result=mysqli_fetch_array($st);

function Message()
{
	if(isset($_SESSION["ErrorMessage"]))
	{
		$Output="<div class=\"alert alert-danger\">"; 
         
          $Output.=htmlentities($_SESSION["ErrorMessage"]);
             
           $Output.="</div>";
            $_SESSION["ErrorMessage"]=null;  

           return $Output;
        

	}
} 
     function SuccessMessage()
{
	if(isset($_SESSION["SuccessMessage"]))
	{
		$Output="<div class=\"alert alert-success\">"; 
          $Output.=htmlentities($_SESSION["SuccessMessage"]);
             
           $Output.="</div>";
            $_SESSION["SuccessMessage"]=null;  

           return $Output;
        

	}
} 




?>