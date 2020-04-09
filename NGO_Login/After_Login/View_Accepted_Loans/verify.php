<?php
session_start();

$user=$_SESSION['username'];

$con2=mysqli_connect("localhost","root","","ngo");
$con=mysqli_connect("localhost","root","","sih");
$q="SELECT applicationId FROM ".$user." WHERE accept=1";
$res=mysqli_query($con2,$q);
$num=mysqli_num_rows($res);
// $appl=array();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Accepted Loans</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="verify.css">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<body>
    </head>
    <header>

    </header>

    <body>
        <div class="container" style="top:250px">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Loan Account no.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email ID</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                   for($i=0;$i<$num;$i++)
                        {
                        $result=mysqli_fetch_array($res);
                        $application=$result['applicationId'];

                        $q2="SELECT * FROM userdetails where applicationId=$application";

                        $res2=mysqli_query($con,$q2);
                        $result2=mysqli_fetch_array($res2);


                        // array_push($appl['applicationId'],$result['applicationId']);
                        // // echo $appl[0]['applicationId'];
                        // array_push($appl['email'],$result2['email']);
                        // array_push($appl['loanAcNo'],$result2['loanAccountNumber']);
                        $email=$result2['email'];

                        $q3="SELECT name FROM user where email='$email'";
                        $res3=mysqli_query($con,$q3);
                        $result3=mysqli_fetch_array($res3);

                        // array_push($appl['name'],$result3['name']);




?>
                     <tr>
                         <td><?php echo $result2['loanAccountNumber'];?></td>
                         <td><?php echo $result3['name'];?></td>
                         <td><?php echo $result2['email'];?></td>
                         <td><a href="details.php?loanAccountNumber=<?php echo $result2['loanAccountNumber'];?>">Details</a>
                        </td>  
                     </tr>

                   <?php 
                   }
                    ?>
                        
                </tbody>
            </table>
        </div>
    </body>

</html>