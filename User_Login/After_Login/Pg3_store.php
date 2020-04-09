<?php require_once("ssn.php");?>

<?php

  if(isset($_POST["Submit"]))
  {
      $name=trim(strval($_POST['accName']));
  	  $AccNo=trim(strval($_POST['AccNo']));
      $Aadhar=trim(strval($_POST['Aadhar']));
      $IFSC=trim(strval($_POST["IFSC"]));
      $Loan=trim(strval($_POST["Loan"]));
      $Tenure=trim(strval($_POST['Tenure']));
      $Pan=trim(strval($_POST["PAN"]));
 
      
      $Query="UPDATE userdetails SET accountHolderName='$name',accountNumber='$AccNo',accountIFSC='$IFSC',aadhar='$Aadhar', pancard='$Pan',amount='$Loan',tenure='$Tenure' WHERE email='$email'";
      $Execute=$conn->query($Query);
      
      if($Execute)
      {
      	$q= "UPDATE userdetails SET pg3=1 WHERE email='$email'";
        $stmt=$conn->query($q);
        SuccessMessage();
      	header("location:http://localhost/SIH/User_Login/After_Login/Pg4.php");
      }
      else
        header('location:http://localhost/SIH/User_Login/After_Login/Pg3.php');

  } 
  else
    header('location:http://localhost/SIH/User_Login/After_Login/Pg3.php');


?>