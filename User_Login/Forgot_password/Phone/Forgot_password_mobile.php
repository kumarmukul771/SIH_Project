<?php

    error_reporting(E_ALL & ~ E_NOTICE);
    
    
    $otp=0;

    require ('textlocal.class.php');

    $outp=array();

    class Controller
    {
        function __construct() 
        {
            $this->processMobileVerification();
        }
        
        function processMobileVerification()
        {
            $obj=json_decode($_GET['x'],false);
                


                $mobile_number = $obj->mobile;
                // echo "MUKUL";
                $conn=new mysqli('localhost','root','','sih');
                $sql="SELECT * FROM user WHERE phone='$mobile_number'";
                $stmt=$conn->query($sql);

                if($stmt->num_rows > 0 ) 
                {
                $mobile_number = $obj->mobile;
                                
                $apiKey = 'mk0CR6+1sXA-z0nfzQnJHpgaVIBxOWQG7UKfmfQCy1';
                // mk0CR6+1sXA-z0nfzQnJHpgaVIBxOWQG7UKfmfQCy1
                $Textlocal = new Textlocal(false, false, $apiKey);
                
                $numbers = array($mobile_number);
                $sender = 'TXTLCL';
                
                $otp = rand(100000, 999999);
                
                $message = "Your One Time Password is".$otp;
                
                try
                {
                    $response = $Textlocal->sendSms($numbers, $message, $sender);
                    $outp['ind']=1;
                    $outp['otp']=$otp;
                    exit();
                }
                catch(Exception $e)
                {
                    $outp['ind']=-2;
                    die('Error: '.$e->getMessage());
                }
                 }
                 else $outp['ind']=-1;               
                echo json_encode($outp);
                    
        }
    }
    
    //created object and called contructor
    $controller = new Controller();
?>