<?php
	
	$conn=new mysqli('localhost','root','','sih');
	session_start();

	$email = $_SESSION['email'];
	$sql = "SELECT *from user where email='$email'";

	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	$num=mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>

	<title>Edit Profile</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="Verify.js"></script>
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

		 </div>
	</nav>

	<!-- **************************************************************  Navbar ends  ************************************************************-->

<body onload="myfuc()">

	<div class="container" style="margin-top: 50px;">

	    <h1 style="text-align: center;">Edit your profile</h1>

	    <div style="width: 30%; margin: 25px auto;" >
	        
	        <form method="post" action="edition.php" >
	            
	            <div class="form-group">
	                <input class="form-control" type="text" value="<?php echo $row['name']; ?>" name="name" id="name"  placeholder="Full name">
	            </div>
	            
	            <div class="form-group">
	                <input class="form-control" type="number" value="<?php echo $row['phone']; ?>" name="phone" id="phone" placeholder="Phone number" maxlength="10" minlength="10">
	            </div>
	            
	            <div class="form-group">
	                <input class="form-control" type="password" name="password" id="password" placeholder="New Password">
	            </div>  
	            
	            <div class="form-group">
	                <input class="form-control" type="password" name="conPass" id="conPass" placeholder="Confirm Password">
	            </div>

	            <div class="form-group">
	                <input class="btn btn-lg btn-primary btn-block" type="submit" value="submit" name="submit" onclick="return validateForm()">
	            </div>

	        </form>
	        
	        <a href="http://localhost/SIH/User_Login/After_Login/Profile/Profile.php">Go back</a>
	        
	    </div>
	   
	</div>

</body>
</html>