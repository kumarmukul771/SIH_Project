<?php
require_once("ssn.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Transaction Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.heads{
	font-size: 22px;
}
.mains{
	position: absolute;
	left: 10px;
}

.headButtons{
	position: absolute;
	right: 30px;
	margin-top: 7px;
}

.headButtons a{
	margin-left: 15px;
}
	</style>
</head>


 <!-- **************************************************************  Navbar starts  ************************************************************-->

	<nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top" role="navigation">
	  	

	    	<div class="navbar-header">
	      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
	    	</div>

		
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	
		      	<ul class="nav navbar-nav mains">
			        <li><a href="" class="fa fa-home heads" aria-hidden="true">Home</a></li>
			        <li><a href="about.hp" target="blank">About</a></li>
			        <li><a href="../partials/Header/links/links.php" target="blank">Links</a></li>
			        <li><a href="http://localhost/SIH/User_Login/After_Login/Profile/Profile.php" target="blank">Profile</a></li>
		      	</ul>

		    <?php

		    	if( !isset($_SESSION['email']) )
		    	{ ?>
		    		<div class="headButtons">
			      		<a class="btn btn-danger" href="signup.html" target="blank">Sign Up</a>
			      		<a class="btn btn-danger" href="login.html" target="blank">Log In</a>
		      		</div>
		    <?php	
				}

				else
				{ ?>

					<div class="headButtons">
			      		<a class="btn btn-danger" href="#" target="blank">Signed in as <?php echo $_SESSION['email']; ?></a>
			      		<a class="btn btn-danger" href="http://localhost/SIH/User_Login/logout.php" target="blank">Logout</a>
		      		</div>
		    <?php
				}

		    ?>
		      	
		    </div>

		 
	</nav>

	<!-- **************************************************************  Navbar ends  ************************************************************-->

	<div class="container">
		<div class="card text-center">
		  <div class="card-body">
		    <h1 class="card-title">Loan Account Details</h1><hr><br><br>
		  </div>
		</div>
<?php 
	if($result['accepted']==1)
	{
		?>
		<div class="card text-center">
			<h3>Loan Account Number :<?php echo $result['loanAccountNumber'];?><h3>
			<h3>Amount Disbursed :<i class="fa fa-rupee"></i> <?php echo $result['amount'];?></h3>
			<h3>Amount Repayed :<i class="fa fa-rupee"></i> <?php echo $result['repayed'];?></h3>
			<h3>Outstanding Loan :<i class="fa fa-rupee"></i> <?php echo $result['outstanding']; ?></h3>
		</div>
	<?php 
	}
	else if($result['submitted']==1)
	{
		?>
		<div class="card text-center">
			<h2>Your Application ID :<?php echo " ".$result['applicationId']; ?></h2>
			<h3>Loan has yet not been accepted</h3>
		</div>
	<?php 
	}
	else 
	{
		?>
		<div class="card text-center">
			<h3>You have yet not applied for loan.To apply for loan <a href="../Pg1.php">click here</a></h3>
		</div>
	<?php 
	}

	?>
	</div>
</body>
</html>