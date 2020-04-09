<?php

session_start();

$loan=$_GET['loanAccountNumber'];
$con=mysqli_connect("localhost","root","","sih");

$q="SELECT * FROM userdetails WHERE loanAccountNumber=$loan";
$res=mysqli_query($con,$q);
$result=mysqli_fetch_array($res);



$email=$result['email'];
$out=$result['outstanding'];
$amount=$result['amount'];

$q2="SELECT * from user WHERE email='$email'";
$stmt2=$con->query($q2);
$result3=mysqli_fetch_array($stmt2);

$name=$result3['name'];

$conn=mysqli_connect("localhost","root","","account");
$table="loan".$loan;
$query="SELECT * FROM $table";

$ress=mysqli_query($conn,$query);

$num=mysqli_num_rows($ress);
$flag=0;$mark=0;
$paid="No payment till date.";

for($i=0;$i<$num;$i++)
{
    $result2=mysqli_fetch_array($ress);
        
    $status=$result2['status'];

    if($status=="Unpaid"&&$flag==0)
    {
        $due=$result2['dueDate'];
        $flag=1;
    }

    if($status=="Paid"&&$mark==0)
    {
        $paid=$result2['paidDate'];
    }

    if($flag==1&&$mark==1)
    {
        break;
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="jumbotron" style="text-align: center; margin-top: 100px;">
     <b>Name of the applicant</b>:<?php echo "$name"; ?>
   <br>
     <b>Email Id of the applicant</b>:<?php echo "$email"; ?>
   <br>
      <b>Outstanding Amount</b>:<?php echo "$out"; ?>
   <br>
     <b>Total Amount</b>:<?php echo "$amount"; ?>
   <br>
      <b>Next Payment Date</b>:<?php echo $due; ?>
   <br>
      <b>Last Payment Date</b>:<?php echo $paid; ?>
   <br>


</div>

</body>
</html>