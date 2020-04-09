<?php require_once("ssn.php");?>

<?php

  if(isset($_POST["Submit"]))
  {
    	$location=trim(strval($_POST['location']));
      $worth=trim(strval($_POST['worth']));
      $house=trim(strval($_POST["house"]));
      $town=trim(strval($_POST["town"]));
      $street=trim(strval($_POST['street']));
    
      $state=trim(strval($_POST['state']));
      $cardNumber=trim(strval($_POST['cardNumber']));
      $cardHolderName=trim(strval($_POST["cardHolderName"]));
      $bank=trim(strval($_POST['bank']));
      $branch=trim(strval($_POST["branch"]));
    
      $q="UPDATE userdetails SET  propertyLocation='$location',propertyHouseNumber='$house',propertyWorth='$worth',propertyTown='$town',propertyStreet='$street',propertyState='$state',cardNumber='$cardNumber',cardHolderName='$cardHolderName',  bankName='$bank',branchName='$branch' WHERE email='$email'";
      $Execute=$conn->query($q);
      
      if($Execute)
      {
        $q="UPDATE userdetails SET pg5=1 WHERE email='$email'";
            $stmt=$conn->query($q);
      	$_SESSION["SuccessMessage"] = "Details Added Successfully";
        SuccessMessage();
      	header("location:http://localhost/SIH/User_Login/After_Login/Pg6.php");
      }
    else 
    {
    	$_SESSION["ErrorMessage"] = "Fill all the details ";
      Message();
    	header("location:http//loaclhost/SIH/User_Login/After_Login/Pg5.php");
    }

  } 
  else
    header('location:http://localhost/SIH/User_Login/After_Login/Pg5.php');


?>