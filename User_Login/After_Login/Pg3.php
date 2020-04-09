<?php
require_once("ssn.php");

if(!isset($_SESSION['email']))
   header("location:http://localhost/SIH/User_Login/index.html"); 
else 
{
	if($result['pg2']==1)
		{
	?>

<!DOCTYPE html>
<html>
<head>

	<title></title>
	
	<link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
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
  		.done1 
      {
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS1PtHiDVLOKSBSsNlX7NI59DftQBC7f9TbLj77MK0VKMtmfFjG");
        background-size: cover;
      }

	</style>

	<script>
		function verify()
		{
			
		
			var ip=document.querySelectorAll(".form-control-alternative");
			
  
			for(var i=0;i<ip.length;i++)
			{
				if(i==4)
				continue;

				if(ip[i].value=="")
				{ 
				
					ip[i].style.boxShadow="  0 0 5px red ";
					ip[i].focus();
					return false;
				}
				else 
				{
				ip[i].style.boxShadow="0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02)";
				  ip[i].blur();
				}
			}

			if(ip[3].value.length!=12)
			{
				pmsg.style.display="block";
				pmsg.innerHTML="*Required length is 12!";
				pmsg.style.color="red";
				ip[3].style.boxShadow="  0 0 5px red ";
			  
				return false;
			}
			else
			{
				pmsg.style.display="none";
				ip[3].style.boxShadow="0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02)";
			}

			if(ip[1].value.length<9 && ip[1].value.length>18)
			{
				pmsgg.style.display="block";
				pmsgg.innerHTML="*Required length is 10!";
				pmsgg.style.color="red";
				ip[1].style.boxShadow="0 0 5px red ";
			  
				return false;
			}

			else
			{
				pmsgg.style.display="none";
				ip[1].style.boxShadow="0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02)";
			}  
  
			return true;
		}
	  
	  </script>
  

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

			if($result['pg3']==0)
			{
		?>
<div class="main-content" style="top: -80px;">
<div class="container mt-7">
<!-- Table -->
<h1 class="mb-5" style="text-align: center;font-weight: 700">Account Details</h1>
<div class="row">
<div class="col-xl-8 m-auto order-xl-1">
<div class="card bg-secondary shadow">
<div class="card-header bg-white border-0">
<div class="row align-items-center">
<div class="col-8">
<h3 class="mb-0">Account Details</h3>
</div>
<div class="col-4 text-right">
<a href="#!" class="btn btn-sm btn-primary">Settings</a>
</div>
</div>
</div>
<div class="card-body">

<form action="Pg3_store.php" method="post">

<div class="pl-lg-4">
	<p id="pmsgg"></p>
<div class="row">

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-name">Account Holder Name*</label>
<input type="text" id="input-name" class="form-control form-control-alternative" placeholder="Full name" name="accName" required="">
</div>
</div>

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-first-name">Account Number*</label>
<input type="number" id="input-first-name" class="form-control form-control-alternative" placeholder="Write your account number" name="AccNo" required="">
</div>
</div>

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-last-name">IFSC Code*</label>
<input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="IFSC Code" name="IFSC" required="">
</div>
</div>

</div>
<p id="pmsg"></p>

<div class="row">

<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-aadhar" max-length=16>Aadhar Number*</label>
<input type="number" id="input-aadhar" class="form-control form-control-alternative" placeholder="XXXX-XXXX-XXXX" name="Aadhar" required="">
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-pan">PAN Card (optional)</label>
<input type="text" id="input-pan" class="form-control form-control-alternative" placeholder="PAN number" name="PAN">
</div>
</div>

</div>
</div>
<hr class="my-4">
<!-- Address -->
<h6 class="heading-small text-muted mb-4">Loan Details</h6>
<div class="pl-lg-4">
<div class="row">
<div class="col-md-12">
<div class="form-group focused">
<label class="form-control-label" for="input-address">Amount Of Loan*</label>
<input id="input-address" class="form-control form-control-alternative" placeholder="Enter Loan Amount" type="number" name="Loan" required="" title="Enter amount in Rupees. You can chosoe amount between 1 lakh and 10 lakhs">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="form-group focused">
<label class="form-control-label" for="input-city">Tenure(in years)*</label>
<select name="Tenure" id="input-city" class="form-control form-control-alternative">
	<option>5</option>
	<option>10</option>
	<option>15</option>
</select>
</div>
</div>
</div>
</div>

<br>

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
<h1 class="mb-5" style="text-align: center;font-weight: 700">Account Details</h1>
<div class="row">
<div class="col-xl-8 m-auto order-xl-1">
<div class="card bg-secondary shadow">
<div class="card-header bg-white border-0">
<div class="row align-items-center">
<div class="col-8">
<h3 class="mb-0">Account Details</h3>
</div>
<div class="col-4 text-right">
<a href="#!" class="btn btn-sm btn-primary">Settings</a>
</div>
</div>
</div>
<div class="card-body">

<form action="Pg3_store.php" method="post">

<div class="pl-lg-4">
	<p id="pmsgg"></p>
<div class="row">

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-name">Account Holder Name*</label>
<input type="text" id="input-name" class="form-control form-control-alternative" placeholder="<?php echo $result['accountHolderName']; ?>" name="accName" disabled>
</div>
</div>

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-first-name">Account Number*</label>
<input type="number" id="input-first-name" class="form-control form-control-alternative" placeholder="<?php echo $result['accountNumber']; ?>" name="AccNo" disabled>
</div>
</div>

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-last-name">IFSC Code*</label>
<input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="<?php echo $result['accountIFSC']; ?>" name="IFSC" disabled>
</div>
</div>

</div>
<p id="pmsg"></p>

<div class="row">

<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-aadhar" max-length=16>Aadhar Number*</label>
<input type="number" id="input-aadhar" class="form-control form-control-alternative" placeholder="<?php echo $result['aadhar']; ?>" name="Aadhar" disabled>
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-pan">PAN Card (optional)</label>
<input type="text" id="input-pan" class="form-control form-control-alternative" placeholder="<?php echo $result['pancard']; ?>" name="PAN" disabled>
</div>
</div>

</div>
</div>
<hr class="my-4">
<!-- Address -->
<h6 class="heading-small text-muted mb-4">Loan Details</h6>
<div class="pl-lg-4">
<div class="row">
<div class="col-md-12">
<div class="form-group focused">
<label class="form-control-label" for="input-address">Amount Of Loan*</label>
<input id="input-address" class="form-control form-control-alternative" placeholder="<?php echo $result['amount']; ?>" type="number" name="Loan" disabled>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="form-group focused">
<label class="form-control-label" for="input-city">Tenure*</label>
<select name="Tenure" id="input-city" class="form-control form-control-alternative" disabled>
	<option><?php echo $result['tenure']; ?></option>
	<option>10 years</option>
	<option>15 years</option>
</select>
</div>
</div>
</div>
</div>

<br>

<div class="form-group">
	<label class="checkbox-inline">
		<input type="checkbox" disabled="" checked="">I accept the <a href="#">Terms of use</a> &amp; <a href="#">Privacy Policy </a>
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
	else header("location:http://localhost/SIH/User_Login/After_Login/Pg2.php");
}
?>