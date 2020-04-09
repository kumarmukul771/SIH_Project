<?php

$obj=json_decode($_GET['x'],false);


$otp=0;

if($obj->run == "sendOtp")
{
		$mobile=$obj->mobile;

		$conn=new mysqli('localhost','root','','sih');
		$sql="SELECT * FROM user WHERE phone=".$mobile;
		$stmt=$conn->query($sql);

		if($stmt->num_rows==0)
		echo "-1";//mobile no. does not exist in table
		else 
		{
			include 'textlocal.class.php';

			$apikey=urlencode('mk0CR6/1sXA-z0nfzQnJHpgaVIBxOWQG7UKfmfQCy1');
			$Textlocal=new Textlocal(false,false,$apikey);


			$numbers=array($mobile);
			$sender='TXTLCL';
			$otp=rand(100000,999999);
			$message="Your one time password is ".$otp;

			$response=$Textlocal->sendSms($numbers,$message,$sender);	
		}
}
else
{
	$received_otp=$obj->otp;
	if($received_otp == $otp)
		echo "2";
	else echo "-3";
}
?>