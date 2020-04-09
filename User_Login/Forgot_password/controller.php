<?php
include 'textlocal.class.php';
error_reporting(E_ALL & ~ E_NOTICE);
$obj=json_decode($_GET['x'],false);

$otp=0;

if($obj->run=="sendOtp")
{
	$mobile_number=$obj->mobile;

	$conn=new mysqli('localhost','root','','sih');
	$sql="SELECT * FROM user WHERE phone='$mobile_number'";
	$stmt=$conn->query($sql);

	if($stmt->num_rows > 0 ) 
	{
		$apiKey = urlencode('XT+HybFYFlg-h35adeMJwcKL45uVT6X5PulvQv2KRh');
        $Textlocal = new Textlocal(false, false, $apiKey);
        
        $numbers = array($mobile_number);
        $sender = 'TXTLCL';
        
        $otp = rand(100000, 999999);
        
        $_SESSION['session_otp'] = $otp;
        $message = "Your One Time Password is" . $otp;
        
        try
        {
            $response = $Textlocal->sendSms($numbers, $message, $sender);
            require_once ("verification-form.php");
            exit();
        }
        catch(Exception $e)
        {
            die('Error: '.$e->getMessage());
        }
	}
}
else
{
	if($obj->otp==$otp)
		echo 2;
}
?>