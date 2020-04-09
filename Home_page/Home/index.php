<?php

	session_start();
    
?>

<!DOCTYPE html>
<html>
<head>

	<title>SIH Portal</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../partials/css/footer.css">
	<link rel="stylesheet" type="text/css" href="../partials/css/header.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/scrollTop.css">
	<link rel="stylesheet" type="text/css" href="css/testmonials.css">

	<script type="text/javascript" src="js/preloader.js"></script>
	<script type="text/javascript" src="js/scrollTop.js"></script>

</head>

<body onload="myfuc()">

	<div id="preloader"></div>


	<div style="display: none;" id="wholePage">
		
  
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
			      		<a class="btn btn-danger" href="http://localhost/SIH/Registration_From/Register.php" target="blank">Sign Up</a>
			      		<a class="btn btn-danger" href="http://localhost/SIH/User_Login/index.php" target="blank">Log In</a>
		      		</div>
		    <?php	
				}

				else
				{ ?>

					<div class="headButtons">
			      		<a class="btn btn-danger" href="http://localhost/SIH/User_Login/After_Login/Profile/Profile.php" target="blank">Signed in as <?php echo $_SESSION['email']; ?></a>
			      		<a class="btn btn-danger" href="http://localhost/SIH/User_Login/logout.php" target="blank">Logout</a>
		      		</div>
		    <?php
				}

		    ?>
		      	
		    </div>

		 </div>
	</nav>

	<!-- **************************************************************  Navbar ends  ************************************************************-->

		<br><br> <br> 

	<!-- ************************************************************ Carousels starts  **********************************************************-->

		<div id="carousel-example" class="carousel slide" data-ride="carousel">
		  	
		  	<ol class="carousel-indicators">
			    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example" data-slide-to="1"></li>
			    <li data-target="#carousel-example" data-slide-to="2"></li>

		  	</ol>

		  	<div class="carousel-inner">
			    
			    <div class="item active">
			      	<a href="#"><img src="Images/Caraousel/1.jpg"/></a>
			      	<div class="carousel-caption">
			      	</div>
			    </div>

			    <div class="item">
			      	<a href="#"><img src="Images/Caraousel/2.jpg"/></a>
			      	<div class="carousel-caption">
			      	</div>
			    </div>

			    <div class="item">
			      	<a href="#"><img src="Images/Caraousel/3.jpg"/></a>
			      	<div class="carousel-caption">
			      	</div>
			    </div>

		  	</div>

		  	<a class="left carousel-control" href="#carousel-example" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
		  	</a>

		  	<a class="right carousel-control" href="#carousel-example" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
		  	</a>

		  	<div class="hid"></div>

		</div>

	<!-- ************************************************************ Carousels ends ************************************************************-->

	<br><br><br>

	<!-- ************************************************************ Main body starts  **********************************************************-->
		
		<div class="container">
			
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-success text-center h1" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000"data-aos-anchor-placement="top-bottom">
						Welcome to our Portal
					</div>
				</div>
			</div>

			<br><br><br>

			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
					<img src="https://newsmobile.in/wp-content/uploads/2018/07/h.jpg" class="img-thumbnail" data-aos="fade-up" data-aos-offset="200" 
						 data-aos-delay="50" data-aos-duration="1000">
				</div>

				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="margin-left: 50px; font-size: 20px; margin-top: 15px;">
					<h1 style="text-align: center;color:rgba(44, 130, 201, 1) ; font-size: 34px;">Missions</h1>
					<b>To be a single window facilitator for provision of financial services with backward and forward linkages for women in the unorganized sector through Intermediary Micro Finance Organizations (IMOs) and Women Self Help Groups (SHGs) and to augment their capacities through multi-pronged efforts.</b>
				</div>
			</div>
			
			<br>

			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="font-size: 20px; margin-top: 15px;">
					<h1 style="text-align: center;color:rgba(44, 130, 201, 1) ; font-size: 34px;">Schemes and other activities</h1>
					<b>The operating model currently followed by RMK is a group model with RMK as a facilitating agency wherein RMK provides loan products to Non – Governmental Organization (NGO)/ Intermediary Micro-financing Organization (IMO) / Voluntary Organisation (VO) which on-lend to Women Groups like SHG, JLG etc</b>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="margin-left: -600px;">
					<img src="https://asset.barrons.com/public/resources/images/ON-CD744_Indian_B1280_20170602180428.jpg" class="img-thumbnail rights" data-aos="fade-down" data-aos-offset="200" 
							  data-aos-delay="50" data-aos-duration="1000">
				</div>

				
			</div>

			<br>

			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
					<img src="https://idronline.org/user-content/uploads/2019/03/Rural-Indian-women-working-on-the-land-CAnderson.jpg" class="img-thumbnail" data-aos="fade-right" data-aos-offset="200" 
						 data-aos-delay="50" data-aos-duration="1000">
				</div>
			</div>
			
			<br>

			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
					<img src="https://s3.ap-south-1.amazonaws.com/drilersblog/production/uploaded_images/Aug_17_2019_17_02_52.jpg" class="img-thumbnail rights" data-aos="fade-left" data-aos-offset="200" 
							  data-aos-delay="50" data-aos-duration="1000">
				</div>
			</div>

			<br>

			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
					<img src="https://i.ytimg.com/vi/0HLwc4ztiZY/maxresdefault.jpg" class="img-thumbnail" data-aos="fade-up-right" data-aos-offset="200" 
						 data-aos-delay="50" data-aos-duration="1000">
				</div>
			</div>
			
			<br>

			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
					<img src="https://s3.scoopwhoop.com/anj/w3/597908897.jpg" class="img-thumbnail rights" data-aos="fade-up-left" data-aos-offset="200" 
							  data-aos-delay="50" data-aos-duration="1000">
				</div>
			</div>
			

		</div>
		
		<!-- ************************************************************ Main body ends ***********************************************************-->

		<br><br><br><br>

		<!-- ******************************************************  Testimonials starts  ************************************************************-->

		<div class="container">
			<div class="horizontal"></div>
			<h1 class="test_text">TESTIMONIALS</h1>
			<div class="horizontal"></div>
		</div>

	 	<div class="slide hi-slide">
           <div class="hi-prev"></div>
           <div class="hi-next"></div>
            
            <ul>
                
                <li class="gunjan">
                    <div class="text-block" id="1">
					<p style="position: absolute;bottom:20px;left:10px;">Application process is very convenient<br><br><br><br> -Aditi Singh </p>
					</div>
                    <div class="text-block log" id="b1"style="background:url('Images/Testimonials/1.jpg');background-size:cover;">
						
					</div>
                </li>

               <li class="gunjan">
                    <div class="text-block" id="2">
					<p style="position: absolute;bottom:20px;left:10px;">Portal services are quite faster than expected<br><br><br><br> -Pranita  </p>
					</div>
                    <div class="text-block log" id="b2"style="background:url('Images/Testimonials/2.jpg');background-size:cover;"></div>
                </li>

                <li class="gunjan">
                    <div class="text-block" id="3">
						<p style="position: absolute;bottom:20px;left:10px;">Portal features are quite satisfying<br><br><br><br><br> -Ankita</p>
					</div>
                    <div class="text-block log" id="b3"style="background:url('Images/Testimonials/3.jpg');background-size:cover;"></div>
                </li>

                <li class="gunjan">
                    <div class="text-block" id="4">
					<p style="position: absolute;bottom:20px;left:10px;">Portal always responds to meet our needs.<br><br><br><br> -Shipra </p>
					</div>
                    <div class="text-block log" id="b4"style="background:url('Images/Testimonials/8.jpg');background-size:cover;"></div>
                </li>

                <li class="gunjan">
                    <div class="text-block" id="5">
					<p style="position: absolute;bottom:20px;left:10px;">I found this portal really helpful.It saved me lots of time<br><br><br> -Asmita </p>
					</div>
                    <div class="text-block log" id="b5"style="background:url('Images/Testimonials/9.jpg');background-size:cover;"></div>
                </li>

                <li class="gunjan">
                    <div class="text-block" id="6">
					<p style="position: absolute;bottom:20px;left:10px;">Many thanks to the continued support and co-operation extended by the bank.<br><br><br> -Ananya </p>
					</div>
                    <div class="text-block log" id="b6"style="background:url('Images/Testimonials/6.jpg');background-size:cover;"></div>
                </li>

                <li class="gunjan">
                     <div class="text-block" id="7">
						<p style="position: absolute;bottom:20px;left:10px;">It is the best portal to apply for the loans<br><br><br><br> -Anjali</p>
						
					 </div>
                	<div class="text-block log" id="b7"style="background:url('Images/Testimonials/10.jpg');background-size:cover;"></div>
                </li>

            </ul>

        </div>

        <!-- *****************************************************  Testinomials ends  **********************************************************-->

       	
	<!-- *****************************************************  Footer starts  **************************************************************-->

	<footer class="new_footer_area bg_color ">
        <div class="new_footer_top ">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Contact us</h3>    
                            <div>     	
                            	<p class="address"> <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>&nbsp;</p>
                            </div>
                            <br>
                            <p class="cont"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> &nbsp;+91 - 8969418011</p>
                           	<p class="cont"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; gunjan768@gmail.com</p>
                        </div>
                    </div>
                    
                     <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="../partials/Footer/faq/faq.php" target="blank">FAQ</a></li>
                                <li><a href="../partials/Footer/terms.php" target="blank">Term &amp; conditions</a></li>
                              <!--   <li><a href="#">Reporting</a></li> -->
                                <!-- <li><a href="#">Documentation</a></li> -->
                                <li><a href="../partials/Footer/guideline.php" target="blank">Guidelines</a></li>
                                <li><a href="../partials/Footer/privacy.php" target="blank">Privacy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Quick Links</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="http://localhost/SIH/NGO_Login/Login/index.php" target="blank">NGO Login</a></li>
                                <li><a href="http://localhost/SIH/Home_page/Home/Status/Form/status.php">Track Application status</a></li>
                            </ul>
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                            <div class="f_social_icon">
                                <a target="_blank" href="https://www.facebook.com/profile.php?id=100005019707454" class="fab fa-facebook"></a>
                                <a target="_blank" href="https://twitter.com/Gun768" class="fab fa-twitter"></a>
                                <a target="_blank" href="https://www.instagram.com/nothing_personal_luv/" class="fab fa-instagram"></a>
                                <a href="https://www.youtube.com/watch?v=IfbRJPBUQgU" target="blank" class="fab fa-youtube"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bg">
                <div class="footer_bg_one"></div>
                <div class="footer_bg_two"></div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-7">
                        <p class="mb-0 f_400"></p>
                    </div>
                    <div class="col-lg-6 col-sm-5 text-right">
            
                    </div>
                </div>
            </div>

            <div class="counts">

            	<p style="display: inline;">Total number of visitors : &nbsp;</p>
	        
				<a href="#" target="_blank" style="position: absolute; top: -10px;">
					<img src="https://hitwebcounter.com/counter/counter.php?page=7191315&style=0009&nbdigits=4&type=ip&initCount=0" title="Total Visitors" 	Alt="hitwebcounter" border="0" style="position: absolute; width: 150px;">
				</a>  

            </div>
            
        </div>
    </footer>

	<!-- ************************************************************  Footer ends  *****************************************************************-->


		<!-- *********************************************************  ScrollTop starts  ***************************************************************-->

		<button id="topBtn"><i class="fa fa-arrow-up"></i></button>

		<!-- *********************************************************  ScrollTop ends  ****************************************************************-->

	</div>
	
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/jquery.hislide.js" ></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	
	<script>
	    AOS.init();
	    $('.slide').hiSlide();
	</script>

	
</body>

</html>