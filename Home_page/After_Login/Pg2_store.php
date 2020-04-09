<?php 
require_once("ssn.php");?>

<?php
  if(isset($_POST["Submit"]))
  {  
        $fullname=trim(strval($_POST['fullName']));
        $dob=trim(strval($_POST['dob']));
        $Add=trim(strval($_POST['address']));
        $City=trim(strval($_POST['city']));
        $Postal=trim(strval($_POST["postal"]));
        $email2=trim(strval($_POST['email']));
        $relation=trim(strval($_POST['relation']));
        $occupation=trim(strval($_POST['occupation']));
        $state=trim(strval($_POST['state']));
        $userid=$_SESSION['userid'];


        $q="UPDATE userdetails SET nomineeName='$fullname',nomineeEmail='$email2',nomineeRelationship='$relation',nomineeDob='$dob',nomineeOccupation='$occupation',nomineeAddress='$Add',nomineeState='$state',nomineeCity='$City',nomineePostal='$Postal' WHERE email='$email'";
        $Execute=mysqli_query($conn,$q);


        if($Execute)
        {
            $q="UPDATE userdetails SET pg2=1 WHERE email='$email'";
            $stmt=$conn->query($q);
          	$_SESSION['SuccessMessage'] = "Details Added Successfully";
            SuccessMessage();
          	header("location:http://localhost/SIH/User_Login/After_Login/Pg3.php");
        }
        else 
        {
        	$_SESSION['ErrorMessage'] = "An error occured!";
          Message();
          echo $q;
        	// header("location:http://localhost/SIH/User_Login/After_Login/Pg2.php");
        }

  }

  else  header("location:http://localhost/SIH/User_Login/After_Login/Pg2.php"); 


?>


