
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