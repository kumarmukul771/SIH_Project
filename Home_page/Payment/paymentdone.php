<?php

	session_start();

	if( !isset( $_SESSION['email'] ) )
	header("Location: ../sign.php");

	$conn=new mysqli('localhost','root','','sih');
    
?>

<!DOCTYPE html>
<html>
<head>

	<title>Payment Done</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../../partials/css/footer.css">
	<link rel="stylesheet" type="text/css" href="../../partials/css/header.css">

</head>

<?php
	
	$conn2=new mysqli('localhost','root','','account');

	$email = $_SESSION['email'];

	$sql = "SELECT *from userdetails where email='$email'";
	$result = mysqli_query($conn , $sql);
	$row = mysqli_fetch_array($result);

	$loanAccountNumber = $row['loanAccountNumber'];
	$table = "loan".$loanAccountNumber;

	$sql1 = "SELECT *from $table";
	$result1 = mysqli_query($conn2 , $sql1);
	$row1 = mysqli_fetch_array($result1);
	
	// $outstanding = $row['outstanding'];
	// $outstanding-=$row1['amount'];
	
	$repayed = $row['repayed'];
	$repayed+=$row1['amount'];

	$outstanding=$row['amount']-$repayed;


	$sql = "UPDATE userdetails SET repayed='$repayed' , outstanding='$outstanding' where email='$email'";
	mysqli_query($conn , $sql);

	$sql2 = "SELECT *from $table";
	$result2 = mysqli_query($conn2 , $sql2);

	for($i=1;$i<=$result2->num_rows;$i++)
	{
		$res=mysqli_fetch_array($result2);
		if($res['status']=='Unpaid')
		{
			$duedate=$res['dueDate'];
			$date=strval(date('Y-m-d'));
			$q="UPDATE $table SET status='Paid',paidDate='$date' WHERE dueDate='$duedate'";
			$stmt=$conn2->query($q);

			if($stmt)
			{
				?>
				<div class="jumbotron">
					<h2>Payment for the Installment number <?php echo " ".$i; ?> of amount <?php echo " ".$res['amount']; ?> is successfull !</h2>
					<a href="http://localhost/SIH/User_Login/After_Login/Profile/Profile.php"><button class="btn-success">Return to profile page</button></a>
				</div>
				<?php 
			}
			else echo "string";
			break;
		}
	}


?>