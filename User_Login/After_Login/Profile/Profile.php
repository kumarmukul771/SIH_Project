<?php
session_start();
if(!isset($_SESSION['email']))
 header('location:http://localhost/SIH/User_Login/index.html');
else
{
	$conn=new mysqli('localhost','root','','sih');
	$email=$_SESSION['email'];
	$q="SELECT * from userdetails WHERE email='$email'";
	$stmt=$conn->query($q);
	$result=mysqli_fetch_array($stmt);

	$sql="SELECT * from user where email='$email'";
	$stmt2=$conn->query($sql);
	$result2=mysqli_fetch_array($stmt2);
?>
<!DOCTYPE html>
<html>
<head>

	<title>Profile Page</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style2.css">
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
<body>

 <!-- **************************************************************  Navbar starts  ************************************************************-->

	<nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top" role="navigation">
	  	<div class="container kuchbhi">

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

		 </div>
	</nav>

	<!-- **************************************************************  Navbar ends  ************************************************************-->
	<div class="container main" style="margin-top: 80px; margin-bottom: 100px;">
			
		<div class="row head">
			<div class="col-xs-12 img1">
			 	<img src="anime-4k-hd-background-download-wallpaper-preview.jpg" id="i1">
			</div>

			<h1><?php echo $result2['name']; ?></h1>	
			<h3>India</h3>	
		</div>
		<br>
		<div class="row btnmukul">
			<div class="col-xs-4">
				<?php 
				if($result['submitted']==0)
				{
					?>
		           <a href="../Pg1.php"><button class="button button-2 button-2d">Loan application</button></a>
		           <?php 
		       }
		       else
		       {
		       	?>
		       	<a href="../Pg1.php"><button class="button button-2 button-2d">View details of the form filled</button></a>
		       	<?php
		       }
		       ?>
		    </div>
			<div class="col-xs-4">
				<a href="http://localhost/SIH/Home_page/Home/Status/Form/status.php"><button class="button button-2 button-2d">Application status</button></a>
			</div>
			<div class="col-xs-4">
				<a href="../Loan_Account/Loan_Account.php"><button class="button button-2 button-2d">Loan Account</button></a>
			</div>
		</div>

		<div class="row btnmukul">
			<div class="col-xs-4">
		            <a href="http://localhost/SIH/Home_page/partials/Footer/guideline.php"><button class="button button-2 button-2d">Guidelines</button></a>
		    </div>
			<div class="col-xs-4">
				<a href="http://localhost/SIH/Home_page/EditProfile/editProfile.php"><button class="button button-2 button-2d">Edit Profile</button></a>
			</div>
			<div class="col-xs-4">
				<a href="http://localhost/SIH/Home_page/After_Login/Amortization/amort.php"><button class="button button-2 button-2d">Amortization Schedule</button></a>
			</div>
		</div>

	</div>

</body>
</html>

<?php
}
?>