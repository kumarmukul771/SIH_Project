<?php
require_once("ssn.php");

if(!isset($_SESSION['email']))
   header("location:http://localhost/SIH/User_Login/index.html"); 
else 
{
  if($result['pg5']==1)
    {
  ?>
<!DOCTYPE html>
<html>
<head>

	<title></title>
	
	<link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="data.js"></script>

	<style type="text/css">
	
  		/*.done 
  		{
  			background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS1PtHiDVLOKSBSsNlX7NI59DftQBC7f9TbLj77MK0VKMtmfFjG");
  			background-size: cover;
  		}*/
  	
  		.circles{
  			height: 60px;
  			width: 60px;
  			border-radius: 50%;
  			background: red;
  			top: 10px;
  			position: relative;
  		}

  		.circles a{
  			position: absolute;
  			top: 50%;
  			left: 50%;
  			transform: translate(-50%,-50%);  		
  		}
  		.done1 
      {
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS1PtHiDVLOKSBSsNlX7NI59DftQBC7f9TbLj77MK0VKMtmfFjG");
        background-size: cover;
      }

	</style>

</head>

<body>


	<div class="container" style="position: relative; left: -40px;">
		
		<div class="row kunal">
			<hr>
			
			<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				<div class="circles"><a class="anchors" href="Pg1.php" style="text-decoration: none;color: white; font-size: 20px;">1</a></div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				<div class="circles"><a class="anchors" href="Pg2.php" style="text-decoration: none;color: white; font-size: 20px;">2</a></div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				<div class="circles"><a class="anchors" href="Pg3.php" style="text-decoration: none;color: white; font-size: 20px;">3</a></div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				<div class="circles"><a class="anchors" href="Pg4.php" style="text-decoration: none;color: white; font-size: 20px;">4</a></div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				<div class="circles"><a class="anchors" href="Pg5.php" style="text-decoration: none;color: white; font-size: 20px;">5</a></div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				<div class="circles"><a class="anchors" href="Pg6.php" style="text-decoration: none;color: white; font-size: 20px;">6</a></div>
			</div>
		</div>
		<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2" style="position: absolute; top: 0px; left: 100%;">
				<div class="circles"><a class="anchors" href="Pg7.php" style="text-decoration: none;color: white; font-size: 20px;">7</a></div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2" style="position: absolute; top: 65px; left: 100%;">
				<div class="circles" style="background: none; text-align: center">Upload Documents</div>
			</div>

		<div class="row kunal">
			<hr>
			
			<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				<div class="circles" style="background: none; text-align: center">Personal Details</div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				<div class="circles" style="background: none; text-align: center">Nominee Details</div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				<div class="circles" style="background: none; text-align: center">Account Details</div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				<div class="circles" style="background: none; text-align: center">Demographic Details</div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				<div class="circles" style="background: none; text-align: center">Economoic Details</div>
			</div>
			<div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
				<div class="circles" style="background: none; text-align: center">Purpose</div>
			</div>
			
		</div>

	</div>


<?php

      if($result['pg6']==0)
      {
    ?>


<div class="main-content" style="top: -80px;">
<div class="container mt-7">
<!-- Table -->
<h1 class="mb-5" style="text-align: center;font-weight: 700">Pupose</h1>
<div class="row">
<div class="col-xl-8 m-auto order-xl-1">
<div class="card bg-secondary shadow">
<div class="card-header bg-white border-0">
<div class="row align-items-center">
<div class="col-8">
<h3 class="mb-0">Loan Purpose Details</h3>
</div>
<div class="col-4 text-right">
<a href="#!" class="btn btn-sm btn-primary">Settings</a>
</div>
</div>
</div>
<div class="card-body">

<form action="Pg6_store.php" method="post">
 
	 
		<div class="form-group">
			<label class="col-lg-12 form-control-label" for="loan">Purpose of loan* :</label>

			<div class="col-lg-12">
				<select id="loan" name="basic" class="form-control">
					<option value="0">Select</option>
					<option value="Enterprenaur">Enterprenaur</option>
					<option value="Business">Business</option>
					<option value="Others">Others</option>
				</select>
		    </div>
		</div>
					 
		<div class="col-lg-12">
			<div class="form-group focused">
				<label class="form-control-label" for="textarea">Specify Purpose* :</label>
				<textarea class="form-control" id="text" name="text" required placeholder="Specify purpose in brief"></textarea>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="form-group focused">
				<label class="form-control-label" for="work">Work Experience/Idea of the work* :</label>
				<textarea class="form-control" id="work" name="work" required placeholder="Tell us in about 50 words" ></textarea>
			</div>
		</div>
		<h2>Project Location:</h2>
					
			<div class="row ">
					 <div class="col-md-4">
								<label class="form-control-label" for="input-state">State*</label>

								<select id="state" name="state" class="form-control" onchange="fncity(this.value)">
									<option value="0">Select</option>
									<option value="Andaman and Nicobar">Andaman and Nicobar</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadar and nagar haveli">Dadar and nagar haveli</option>
									<option value="Daman and diu">Daman and diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharastra">Maharastra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Odisha">Odisha</option>
									<option value="Puducherry">Puducherry</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Telangana">Telangana</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="Uttarakhand">Uttarakhand</option>
									<option value="West Bengal">West Bengal</option>
								</select>
						</div>  
				  
					<div class="form-group col-md-4">
						<label class="col-md-12 form-control-label" for="city">District*</label>
						<select id="city" name="city" class="form-control" onchange="changeCity()">
						<option value="0">Select any</option>
						</select>
					</div>

					<div class="form-group col-md-4">
						<label class="col-md-12 form-control-label" for="area">Area*</label>
						<select id="area" name="area" class="form-control">
						<option value="0">Select</option>
						<option value="Urban">Urban</option>
						<option value="Rural">Rural</option>
						<option value="Sub-urban">Sub-urban</option>
						</select>
					</div>
				  
			</div>
        
			<div class="form-group">
				<label class="checkbox-inline">
					<input type="checkbox" required="">I accept the <a href="#">Terms of use</a> &amp; <a href="#">Privacy Policy </a>
				</label>
			</div>
		
			 <br>	
				
		<input type="submit" name="Submit" id="sub" value="Next" class="btn btn-primary" style="top: 50%; left: 50%; transform: translate(-50%,-50%);" onclick="return verify()">

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

<?php
		}
		else
		{
			?>

			<div class="main-content" style="top: -80px;">
<div class="container mt-7">
<!-- Table -->
<h1 class="mb-5" style="text-align: center;font-weight: 700">Pupose</h1>
<div class="row">
<div class="col-xl-8 m-auto order-xl-1">
<div class="card bg-secondary shadow">
<div class="card-header bg-white border-0">
<div class="row align-items-center">
<div class="col-8">
<h3 class="mb-0">Loan Purpose Details</h3>
</div>
<div class="col-4 text-right">
<a href="#!" class="btn btn-sm btn-primary">Settings</a>
</div>
</div>
</div>
<div class="card-body">

<form action="Pg6_store.php" method="post">
 
	 
		<div class="form-group">
			<label class="col-lg-12 form-control-label" for="loan">Purpose of loan* :</label>

			<div class="col-lg-12">
				<select id="loan" name="basic" class="form-control" disabled>
					<option value="0"><?php echo $result['purpose']; ?></option>
					<option value="Enterprenaur">Enterprenaur</option>
					<option value="Business">Business</option>
					<option value="Others">Others</option>
				</select>
		    </div>
		</div>
					 
		<div class="col-lg-12">
			<div class="form-group focused">
				<label class="form-control-label" for="textarea">Specify Purpose* :</label>
				<textarea class="form-control" id="text" name="text" required placeholder="<?php echo $result['specifyPurpose']; ?>" disabled></textarea>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="form-group focused">
				<label class="form-control-label" for="work">Work Experience/Idea of the work* :</label>
				<textarea class="form-control" id="work" name="work" required placeholder="<?php echo $result['workExperience']; ?>"  disabled></textarea>
			</div>
		</div>
		<h2>Project Location:</h2>
					
			<div class="row ">
					 <div class="col-md-4">
								<label class="form-control-label" for="input-state">State*</label>

								<select id="state" name="state" class="form-control" disabled>
									<option value="0"><?php echo $result['projectState']; ?></option>
									<option value="Andaman and Nicobar">Andaman and Nicobar</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadar and nagar haveli">Dadar and nagar haveli</option>
									<option value="Daman and diu">Daman and diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharastra">Maharastra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Odisha">Odisha</option>
									<option value="Puducherry">Puducherry</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Telangana">Telangana</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="Uttarakhand">Uttarakhand</option>
									<option value="West Bengal">West Bengal</option>
								</select>
						</div>  
				  
					<div class="form-group col-md-4">
						<label class="col-md-12 form-control-label" for="city">District*</label>
						<select id="city" name="city" class="form-control" disabled>
						<option value="0"><?php echo $result['projectDistrict']; ?></option>
						</select>
					</div>

					<div class="form-group col-md-4">
						<label class="col-md-12 form-control-label" for="area">Area*</label>
						<select id="area" name="area" class="form-control" disabled>
						<option value="0"><?php echo $result['projectArea']; ?></option>
						<option value="Urban">Urban</option>
						<option value="Rural">Rural</option>
						<option value="Sub-urban">Sub-urban</option>
						</select>
					</div>
				  
			</div>
        
			<div class="form-group">
				<label class="checkbox-inline">
					<input type="checkbox" checked=""  disabled>I accept the <a href="#">Terms of use</a> &amp; <a href="#">Privacy Policy </a>
				</label>
			</div>
		
			 <br>	
				
		<input type="submit" name="Submit" id="sub" value="Next" class="btn btn-primary" style="top: 50%; left: 50%; transform: translate(-50%,-50%);" disabled="">

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
			<?php
		}
		?>
				<script type="text/javascript">
  var circles=document.querySelectorAll(".circles");
  var anchors=document.querySelectorAll(".anchors");
    <?php
  if($result['pg1']==1)
  { 
  ?>
  circles[0].classList.add("done1");
  anchors[0].style.opacity=0;
  anchors[0].style.fontSize="70px";
  <?php 
}
?>

    <?php
  if($result['pg2']==1)
  { 
  ?>
  circles[1].classList.add("done1");
  anchors[1].style.opacity=0;
  anchors[1].style.fontSize="70px";
  <?php 
}
?>
 <?php
  if($result['pg3']==1)
  { 
  ?>
  circles[2].classList.add("done1");
  anchors[2].style.opacity=0;
  anchors[2].style.fontSize="70px";
  <?php 
}
?>

 <?php
  if($result['pg4']==1)
  { 
  ?>
  circles[3].classList.add("done1");
  anchors[3].style.opacity=0;
  anchors[3].style.fontSize="70px";
  <?php 
}
?>

 <?php
  if($result['pg5']==1)
  { 
  ?>
  circles[4].classList.add("done1");
  anchors[4].style.opacity=0;
  anchors[4].style.fontSize="70px";
  <?php 
}
?>

 <?php
  if($result['pg6']==1)
  { 
  ?>
  circles[5].classList.add("done1");
  anchors[5].style.opacity=0;
  anchors[5].style.fontSize="70px";
  <?php 
}
?>
<?php
  if($result['pg7']==1)
  { 
  ?>
  circles[6].classList.add("done1");
  anchors[6].style.opacity=0;
  anchors[6].style.fontSize="70px";
  <?php 
}
?>
</script>
<?php 
	}
	else header("location:http://localhost/SIH/User_Login/After_Login/Pg5.php");
}
?>