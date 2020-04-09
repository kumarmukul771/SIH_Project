<?php

	session_start();

	if( !isset( $_SESSION['email'] ) )
	header("Location: ../sign.php");

	$conn=new mysqli('localhost','root','','sih');
    
?>

<!DOCTYPE html>
<html>
<head>

	<title>Amortization</title>
	
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

<body>
	
	<?php include('../../partials/Header/header.php'); ?>

	<?php

		$email = $_SESSION['email'];

		$sql = "SELECT *from userdetails where email='$email'";
		
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);

		$accepted = $row['accepted'];
		$approved = $row['approved'];
		$verified = $row['verified'];
		$submitted = $row['submitted'];
		
		$loanAccountNumber = $row['loanAccountNumber'];
		// $outstanding = $row['outstanding'];
		// $loanAmount = $row['amount'];
		// $tenure = $row['tenure'];

		// $interestPerMonth = ceil($loanAmount/36);

		// $amoutPerMonth = ceil($loanAmount/($tenure*12));
		// $amoutPerMonth+=$interestPerMonth;

	?>

	<div class="container" style="margin: 80px;">
		
		<h1 class="alert alert-warning" style="margin-bottom: 60px; text-align: center;">Your payment track</h1>

		<?php

			if( !$submitted && !$accepted)
			{
				echo "<div class='alert alert-danger'>You have yet not applied for the loan</div>";
				exit();
			}

			if( !$verified && !$accepted)
			{
				echo "<div class='alert alert-danger'>Your loan is under process. Wait for the verification</div>";
				exit();
			}

			if( !$approved && !$accepted)
			{
				echo "<div class='alert alert-danger'>Your loan is under process. Wait for the approval</div>";
				exit();
			}

			
			if( !$accepted )
			{
				echo "<div class='alert alert-danger'>The loan has been approved and verified , it has been forwaded for the final procedural</div>";
				exit();
			}

		?>

		<table class="table table-striped" style="position: relative; left: 30px;">
		    
		    <thead>
		      	<tr>
			        <th>Amount</th>
			        <th>Due Date</th>
			        <th>Paid Date</th>
			        <th>Status</th>
		      	</tr>
		    </thead>

		    <tbody>

		        <?php

		        	$conn1 = new mysqli('localhost', 'root', '', 'account');

					if (mysqli_connect_error())
					die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());

		        	$table = "loan".$loanAccountNumber;

		        	$sql = "SELECT *from $table";
		        	
		        	$result = mysqli_query($conn1,$sql);
		        	$count=0;

		        	while( $row = mysqli_fetch_assoc($result) and $row['status'] == "Paid")
		        	$count++;

		        	$result = mysqli_query($conn1,$sql);
		        	$total=0;

					while( $row = mysqli_fetch_assoc($result) ) 
					{
						$amount = $row['amount'];
						$status = $row['status'];
						$dueDate = $row['dueDate'];
						$paidDate = $row['paidDate'];
				?>
					<tr>
						<td> <?php echo $amount; ?> </td>
						<td> <?php echo $dueDate; ?> </td>
						<td> <?php 

								if( $paidDate == '0000-00-00' )
								echo "-";
								else
								echo $paidDate;

						 	?> 
						</td>
						<td> 
							<?php echo $status; 

								if($total == $count)
								{ 
							?>
									<a href="http://localhost/SIH/Home_page/Payment/payment.php?amount=<?php echo $amount;?>&no=<?php echo $total;?>" target="blank" class="btn btn-danger">Pay</a>
							<?php
								}

								$total++;
							?> 
						</td>
					</tr>
				<?php

					}
		        ?>
 		      
		    </tbody>

	  </table>

	</div>
	
	<?php include('../../partials/Footer/footer.php'); ?>

</body>

</html>