<?php
$con=mysqli_connect("localhost","root","","sih");
$state=array(
"Andaman and Nicobar",
"Andhra Pradesh",
"Arunachal Pradesh",
"Assam",
"Bihar",
"Chandigarh",
"Chhattisgarh",
"Dadar and nagar haveli",
"Daman and diu",
"Delhi",
"Goa",
"Gujarat",
"Haryana",
"Himachal Pradesh",
"Jammu and Kashmir",
"Jharkhand",
"Karnataka", 
"Kerala",
"Lakshadweep",
"Madhya Pradesh",
"Maharashtra",
"Manipur",
"Meghalaya",
"Mizoram",
"Nagaland",
"Odisha",
"Puducherry",
"Punjab",
"Rajasthan",
"Sikkim",
"Tamil Nadu", 
"Telangana",
"Tripura",
"Uttar Pradesh",
"Uttarakhand",
"West Bengal"
);
for($i=1;$i<=111;$i++){
    $username="ngo".$i;
    $j=($i-1)/3;
    $pass= password_hash("$username",PASSWORD_DEFAULT);
    $q="INSERT into ngos (username,password,state)values('$username','$pass','$state[$j]')";
    $res=mysqli_query($con,$q);
    if($res){
        echo "Succesfull"."\n";
    }
    else 
    echo "failed".mysqli_error_list($con);

}

?>
