<?php
require_once("ssn.php");

if(!isset($_SESSION['email']))
   header("location:http://localhost/SIH/User_Login/index.html"); 
else 
{
  if($result['pg4']==1)
    {
  ?>
<!DOCTYPE html>
<html>
<head>

	<title></title>
	
	<link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script> 

	<link rel="stylesheet" type="text/css" href="style.css">

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
  		.kunal
  		{
  			left: -500px;
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

      if($result['pg5']==0)
      {
    ?>

<div class="main-content" style="top: -80px;">
<div class="container mt-7">
<!-- Table -->
<h1 class="mb-5" style="text-align: center;font-weight: 700">Economic Details</h1>
<div class="row">
<div class="col-xl-8 m-auto order-xl-1">
<div class="card bg-secondary shadow">
<div class="card-header bg-white border-0">
<div class="row align-items-center">
<div class="col-8">
<h3 class="mb-0">Immovable Property Details</h3>
</div>
<div class="col-4 text-right">
<a href="#!" class="btn btn-sm btn-primary">Settings</a>
</div>
</div>
</div>
<div class="card-body">

<form action="Pg5_store.php" method="post">

<div class="pl-lg-4">
	<p id="pmsgg"></p>
<div class="row">

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="location">Property Location</label>
<input type="text" id="input-name" class="form-control form-control-alternative" placeholder="Property Location" name="location">
</div>
</div>

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-house-number">House Number</label>
<input type="number" id="input-first-name" class="form-control form-control-alternative" placeholder="Write your house number" name="house">
</div>
</div>

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-town">Approx Property Worth(In Rupees*)</label>
<input type="number" id="input-prop-worth" class="form-control form-control-alternative" placeholder="Approx Property Worth" name="worth">
</div>
</div>

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-town">Town</label>
<input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Town" name="town">
</div>
</div>


</div>
<p id="pmsg"></p>

<div class="row">

<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-street" max-length=16>Street</label>
<input type="text" id="input-aadhar" class="form-control form-control-alternative" placeholder="Street Name" name="street">
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-state">State</label>
 <select class="form-control" name="state">
  	
      <option value="0">Please Select</option>
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
        <option value="Maharashtra">Maharashtra</option>
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
</div>

</div>
</div>
<hr class="my-4">
<!-- Credit Card -->

<div class="container" id="asmita">
<div class="row">
<!-- You can make it whatever width you want. I'm making it full width
on <= small devices and 4/12 page width on >= medium devices -->
<div class="col-xs-12 col-lg-8">


<!-- CREDIT CARD FORM STARTS HERE -->
<div class="panel panel-default credit-card-box">
<div class="panel-heading display-table" >
<div class="row display-tr" >
<h3 class="panel-title display-td" style="margin-left: 20px;">Card Details  </h3>
<div class="display-td" >                            
<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png" style="margin-left: 20px;">
</div>
</div>                    
</div>
<div class="panel-body">
<form role="form" id="payment-form">
<div class="row">
<div class="col-xs-12" style="margin-left: 20px;">
<div class="form-group">
<label for="cardNumber">CARD NUMBER</label>
<div class="input-group">
<input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number"autocomplete="cc-number" required autofocus />
<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
</div>
</div>                            
</div>
</div>
<div class="row">
<div class="col-xs-7 col-md-7">
<div class="form-group">
<label for="cardExpiry"><span class="hidden-xs"></span><span class="visible-xs-inline">CARD HOLDER</span> NAME</label>
<input type="text" class="form-control" name="cardHolderName"placeholder="CARDHOLDER'S NAME" autocomplete="cc-exp" required />
</div>
</div>
<div class="col-xs-5 col-md-5 pull-right">
<div class="form-group">
<label for="cardCVC">BANK'S NAME</label>
  <select class="form-control" name="bank">
  	<option>Please Select</option>
      <option>State Bank Of India</option>
      <option>HDFC Bank</option>
      <option>ICICI Bank</option>
      
      <option>Punjab National Bank</option>
      <option>Axis Bank</option>
      <option>Canara Bank</option>

       <option>Bank of Baroda</option>
      <option>Union Bank</option>
      <option>IDBI Bank</option>
       <option>Bank of India</option>
      <option>Others</option>
      


  </select>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-8">
<div class="form-group">
<label for="couponCode">BRANCH NAME</label>
<input type="text" class="form-control" name="branch" placeholder="BRANCH NAME" required="">
</div>
</div>                        
</div>
<div class="form-group">
	<label class="checkbox-inline">
		<input type="checkbox" required="">I accept the <a href="#">Terms of use</a> &amp; <a href="#">Privacy Policy </a>
	</label>
</div>
<input type="submit" name="Submit" id="sub" value="Next" class="btn btn-primary" style="top: 0%; left: 100%; transform: translate(-150%,-80%);">
</form>
</div>
</div>            
<!-- CREDIT CARD FORM ENDS HERE -->


</div>            



</div>
</div>

	<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	
</body>


<!-- **************************** -->

<br>


		
 <br>
 


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
<h1 class="mb-5" style="text-align: center;font-weight: 700">Economic Details</h1>
<div class="row">
<div class="col-xl-8 m-auto order-xl-1">
<div class="card bg-secondary shadow">
<div class="card-header bg-white border-0">
<div class="row align-items-center">
<div class="col-8">
<h3 class="mb-0">Immovable Property Details</h3>
</div>
<div class="col-4 text-right">
<a href="#!" class="btn btn-sm btn-primary">Settings</a>
</div>
</div>
</div>
<div class="card-body">

<form action="Pg5_store.php" method="post">

<div class="pl-lg-4">
  <p id="pmsgg"></p>
<div class="row">

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="location">Property Location</label>
<input type="text" id="input-name" class="form-control form-control-alternative" placeholder="<?php echo $result['propertyLocation']; ?>" name="location" disabled="">
</div>
</div>

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-house-number">House Number</label>
<input type="number" id="input-first-name" class="form-control form-control-alternative" placeholder="<?php echo $result['propertyHouseNumber']; ?>" name="house" disabled="">
</div>
</div>

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-town">Approx Property Worth(In Rupees*)</label>
<input type="number" id="input-prop-worth" class="form-control form-control-alternative" placeholder="<?php echo $result['propertyWorth']; ?>" name="worth" disabled="">
</div>
</div>

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-town">Town</label>
<input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="<?php echo $result['propertyTown']; ?>" name="town" disabled="">
</div>
</div>


</div>
<p id="pmsg"></p>

<div class="row">

<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-street" max-length=16>Street</label>
<input type="text" id="input-aadhar" class="form-control form-control-alternative" placeholder="<?php echo $result['propertyStreet']; ?>" name="street" disabled="">
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-state">State</label>
 <select class="form-control" name="state" disabled="">
    
      <option value="0"><?php echo $result['propertyState']; ?></option>
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
        <option value="Maharashtra">Maharashtra</option>
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
</div>

</div>
</div>
<hr class="my-4">
<!-- Credit Card -->

<div class="container" id="asmita">
<div class="row">
<!-- You can make it whatever width you want. I'm making it full width
on <= small devices and 4/12 page width on >= medium devices -->
<div class="col-xs-12 col-lg-8">


<!-- CREDIT CARD FORM STARTS HERE -->
<div class="panel panel-default credit-card-box">
<div class="panel-heading display-table" >
<div class="row display-tr" >
<h3 class="panel-title display-td" style="margin-left: 20px;">Card Details  </h3>
<div class="display-td" >                            
<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png" style="margin-left: 20px;">
</div>
</div>                    
</div>
<div class="panel-body">
<form role="form" id="payment-form">
<div class="row">
<div class="col-xs-12" style="margin-left: 20px;">
<div class="form-group">
<label for="cardNumber">CARD NUMBER</label>
<div class="input-group">
<input type="tel" class="form-control" name="cardNumber" placeholder="<?php echo $result['cardNumber']; ?>"autocomplete="cc-number" required autofocus  disabled=""/>
<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
</div>
</div>                            
</div>
</div>
<div class="row">
<div class="col-xs-7 col-md-7">
<div class="form-group">
<label for="cardExpiry"><span class="hidden-xs"></span><span class="visible-xs-inline">CARD HOLDER</span> NAME</label>
<input type="text" class="form-control" name="cardHolderName"placeholder="<?php echo $result['cardHolderName']; ?>" autocomplete="cc-exp" required  disabled=""/>
</div>
</div>
<div class="col-xs-5 col-md-5 pull-right">
<div class="form-group">
<label for="cardCVC">BANK'S NAME</label>
  <select class="form-control" name="bank" disabled="">
    <option><?php echo $result['bankName']; ?></option>
      <option>State Bank Of India</option>
      <option>HDFC Bank</option>
      <option>ICICI Bank</option>
      
      <option>Punjab National Bank</option>
      <option>Axis Bank</option>
      <option>Canara Bank</option>

       <option>Bank of Baroda</option>
      <option>Union Bank</option>
      <option>IDBI Bank</option>
       <option>Bank of India</option>
      <option>Others</option>
      


  </select>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-8">
<div class="form-group">
<label for="couponCode">BRANCH NAME</label>
<input type="text" class="form-control" name="branch" placeholder="<?php echo $result['branchName']; ?>" required="" disabled="">
</div>
</div>                        
</div>
<div class="form-group">
  <label class="checkbox-inline">
    <input type="checkbox" style="margin-left: ;" disabled="" checked="">I accept the <a href="#">Terms of use</a> &amp; <a href="#">Privacy Policy </a>
  </label>
</div>
<input type="submit" name="Submit" id="sub" value="Next" class="btn btn-primary" style="top: 0%; left: 100%; transform: translate(-150%,-80%);" disabled="">
</form>
</div>
</div>            



</div>            



</div>
</div>

  
</body>

<br>


    
 <br>
 


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
	else header("location:http://localhost/SIH/User_Login/After_Login/Pg4.php");
}
?>