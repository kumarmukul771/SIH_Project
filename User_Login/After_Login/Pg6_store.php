<?php require_once("ssn.php");?>

<?php

if(isset( $_GET['city']) )
{
    $_SESSION['city']=$_GET['city'];
}
else 
{
    if(isset($_POST["Submit"]))
    {
    
    $loan=trim(strval($_POST['basic']));
    $purp=trim(strval($_POST['text']));
    $work=trim(strval($_POST['work']));
    $state=trim(strval($_POST['state']));
    $city=trim(strval($_SESSION['city']));

    $area=trim(strval($_POST['area']));

    $q="UPDATE userdetails SET  purpose='$loan',specifyPurpose='$purp',workExperience='$work',projectState='$state',projectDistrict='$city',projectArea='$area' WHERE email='$email'";
      $Execute=$conn->query($q);
      
      if($Execute)
      {
        $q="UPDATE userdetails SET pg6=1 WHERE email='$email'";
            $stmt=$conn->query($q);
        $_SESSION["SuccessMessage"] = "Details Added Successfully";
        SuccessMessage();
        header("location:http://localhost/SIH/User_Login/After_Login/Pg7.php");
      }
    else 
    {
        $_SESSION["ErrorMessage"] = "Fill all the details ";
      Message();
        header("location:http://localhost/SIH/User_Login/After_Login/Pg6.php");
    }
}
else
header('location:http://localhost/SIH/User_Login/After_Login/Pg5.php');
}


?>
