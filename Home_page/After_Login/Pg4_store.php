<?php require_once("ssn.php");?>

<?php

  if(isset($_POST["Submit"]))
  {
    	$fname=trim(strval($_POST['fname']));
      $family=trim($_POST['family']);
      $caste=trim(strval($_POST["caste"]));
      $religion=trim(strval($_POST["religion"]));
      $marital=trim(strval($_POST['marital']));
    
      $literacy=trim(strval($_POST['literacy']));
      $soi=trim(strval($_POST['soi']));
      $designation=trim(strval($_POST["designation"]));
      $annual=trim(strval($_POST['annual']));
      $policy=trim(strval($_POST["policy"]));
    
      $q="UPDATE userdetails SET fatherHusbandName='$fname',noFamilyMembers='$family',caste='$caste',religion='$religion',maritalStatus='$marital',literacy='$literacy',designation='$designation',soi='$soi',annualIncome='$annual',policyNumber='$policy' WHERE email='$email'";
      $Execute=$conn->query($q);
      
      if($Execute)
      {
        $q="UPDATE userdetails SET pg4=1 WHERE email='$email'";
            $stmt=$conn->query($q);
      	$_SESSION["SuccessMessage"] = "Details Added Successfully";
        SuccessMessage();
      	header("location:http://localhost/SIH/User_Login/After_Login/Pg5.php");
      }
    else 
    {
    	$_SESSION["ErrorMessage"] = "Fill all the details ";
      Message();
    	header("location:http://localhost/SIH/User_Login/After_Login/Pg4.php");
    }

  } 
  else
    header('location:http://localhost/SIH/User_Login/After_Login/Pg4.php');


?>