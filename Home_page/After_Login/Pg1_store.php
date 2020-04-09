<?php 
require_once("ssn.php");?>

<?php


  if(isset($_POST["Submit"]) && isset($_SESSION['email']))
  {  

          // foreach($_POST as $st=>$m)   print_r($m);

          // var_dump($_POST); echo "\n";

        $DOB=trim(strval($_POST['DOB']));
        $state=strval($_POST['state']);
        $City=trim(strval($_POST['city']));
        $Postal=trim(strval($_POST['postal']));
        $userid=$_SESSION['userid'];
        $Add=mysqli_escape_string($conn,$_POST['Add']);
        $profilePhoto="profilePhoto".$userid;
        

        $q="UPDATE userdetails SET applicantDob='$DOB',applicantProfilePhoto='$profilePhoto',applicantState='$state',applicantCity='$City',applicantPostal='$Postal',applicantAddress='$Add' WHERE email='$email'";
        $stm=$conn->query($q);


        if($stm)
        {
            $q="UPDATE userdetails SET pg1=1 WHERE email='$email'";
            $stmt=$conn->query($q);
          	$_SESSION['SuccessMessage'] = "Details Added Successfully";
            SuccessMessage();
          	header("location:http://localhost/SIH/User_Login/After_Login/Pg2.php");
        }
        else 
        {
        	$_SESSION['ErrorMessage'] = "An error occured!";
          Message();
        	header("location:http://localhost/SIH/User_Login/After_Login/Pg1.php");
        }

  }
  else  header("location:http://localhost/SIH/User_Login/After_Login/Pg1.php"); 


?>


