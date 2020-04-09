<?php
$con=mysqli_connect("localhost","root","","ngo");
$cnt=0;
for($i=1;$i<=111;$i++){
    $name="ngo".$i;
    $q="CREATE table $name (applicationId int not null default 0, verify int not null default 0,approve int not null default 0,accept int not null default 0 )";
    $res=mysqli_query($con,$q);
    $cnt++;
}
if($res){
    echo "succesfull table creation"."   ".$cnt;

}
else{
    echo "failed".mysqli_error($con);
}

?>