<?php
require_once("ssn.php");

if(!isset($_SESSION['email']))
   header("location:http://localhost/SIH/User_Login/index.html"); 
else 
{
	if($result['pg3']==1)
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
				if(i==9)
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

			if($result['pg4']==0)
			{
		?>
<div class="main-content" style="top: -80px;">
<div class="container mt-7">
<!-- Table -->
<h1 class="mb-5" style="text-align: center;font-weight: 700">Loan Scheme Form</h1>
<div class="row">
<div class="col-xl-8 m-auto order-xl-1">
<div class="card bg-secondary shadow">
<div class="card-header bg-white border-0">
<div class="row align-items-center">
<div class="col-8">
<h3 class="mb-0">Demographic Details</h3>
</div>
<div class="col-4 text-right">
<a href="#!" class="btn btn-sm btn-primary">Settings</a>
</div>
</div>
</div>
<div class="card-body">

<form action="Pg4_store.php" method="post">

<div class="pl-lg-4">
	<p id="pmsgg"></p>
<div class="row">

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-name">Father/Husband Name*</label>
<input type="text" id="input-name" class="form-control form-control-alternative" placeholder="Enter Full Name" name="fname">
</div>
</div>

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-first-name">Number of family members*</label>
<select id="selectbasic" name="family" class="form-control">
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
       </select></div>
</div>

<div class="row">
<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-last-name">Caste*</label>

<select id="selectbasic" name="caste" class="form-control">
		  <option value="General">General</option>
		  <option value="OBC">OBC</option>
		  <option value="SC">SC</option>
          <option value="ST">ST</option>
       </select>
        </div>


</div>
<p id="pmsg"></p>


<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-religion" max-length=16>Religion*</label>
<select id="selectbasic" name="religion" class="form-control">
		  
		  <option value="Hinduism">Hinduism</option>
		  <option value="Islam">Islam</option>
		  <option value="Christianity">Christianity</option>
          <option value="Others">Others</option>
       </select>
</div>
</div>
<!-- </div> -->
<!-- <br> -->
<!-- <div class="row"> -->

    <div class="col-lg-6">
        <div class="form-group">
        <label class="form-control-label" for="input-pan">Martial Status*</label>
        <select id="selectbasic" name="marital" class="form-control">
           
            <option value="Married">Married</option>
            <option value="Unmarried">Unmarried</option>
            <option value="Widow">Widow</option>
            <option value="Divorced">Divorced</option>
            
         </select>        </div>
        </div>    

<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-pan">Literacy*</label>
<input type="text" id="input-pan" class="form-control form-control-alternative" placeholder="Educational qualifications" name="literacy">
</div>
</div>
</div>

</div>
</div>
<hr class="my-4">
<!-- Address -->
<h6 class="heading-small text-muted mb-4">Income Details</h6>
<div class="pl-lg-4">
<div class="row">
<div class="col-md-12">
<div class="form-group focused">
<label class="form-control-label" for="input-address">Source of Income*</label>
<input id="text" class="form-control form-control-alternative" placeholder="Enter your income's Source" type="text" name="soi">
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="form-group focused">
<label class="form-control-label" for="input-city">Designation*</label>
<input id="text" class="form-control form-control-alternative" placeholder="Like workers , etc" type="text" name="designation">

</div>
</div>
<div class="col-lg-4">
<div class="form-group focused">
<label class="form-control-label" for="input-country">Annual Income*</label>
<input id="number" class="form-control form-control-alternative" placeholder="In rupees" type="number" name="annual">

</div>
</div>

<div class="col-lg-4">
    <div class="form-group focused">
    <label class="form-control-label" for="input-country">Policy Number (optional) </label>
    <input id="number" class="form-control form-control-alternative" placeholder="If any" type="number" name="policy">
    
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
<h1 class="mb-5" style="text-align: center;font-weight: 700">Loan Scheme Form</h1>
<div class="row">
<div class="col-xl-8 m-auto order-xl-1">
<div class="card bg-secondary shadow">
<div class="card-header bg-white border-0">
<div class="row align-items-center">
<div class="col-8">
<h3 class="mb-0">Demographic Details</h3>
</div>
<div class="col-4 text-right">
<a href="#!" class="btn btn-sm btn-primary">Settings</a>
</div>
</div>
</div>
<div class="card-body">

<form action="Pg4_store.php" method="post">

<div class="pl-lg-4">
	<p id="pmsgg"></p>
<div class="row">

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-name">Father/Husband Name*</label>
<input type="text" id="input-name" class="form-control form-control-alternative" placeholder="<?php echo $result['fatherHusbandName']; ?>" name="fname" disabled>
</div>
</div>

<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-first-name">Number of family members*</label>
<select id="selectbasic" name="family" class="form-control" disabled>
		  <option value="1"><?php echo $result['noFamilyMembers']; ?></option>
		  <option value="2">2</option>
		  <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
       </select></div>
</div>

<div class="row">
<div class="col-lg-6">
<div class="form-group focused">
<label class="form-control-label" for="input-last-name">Caste*</label>

<select id="selectbasic" name="caste" class="form-control" disabled>
		  <option value="General"><?php echo $result['caste']; ?></option>
		  <option value="OBC">OBC</option>
		  <option value="SC">SC</option>
          <option value="ST">ST</option>
       </select>
        </div>


</div>
<p id="pmsg"></p>


<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-religion" max-length=16>Religion*</label>
<select id="selectbasic" name="religion" class="form-control" disabled>
		  
		  <option value="Hinduism"><?php echo $result['religion']; ?></option>
		  <option value="Islam">Islam</option>
		  <option value="Christianity">Christianity</option>
          <option value="Others">Others</option>
       </select>
</div>
</div>
<!-- </div> -->
<!-- <br> -->
<!-- <div class="row"> -->

    <div class="col-lg-6">
        <div class="form-group">
        <label class="form-control-label" for="input-pan">Martial Status*</label>
        <select id="selectbasic" name="marital" class="form-control" disabled>
           
            <option value="Married"><?php echo $result['maritalStatus']; ?></option>
            <option value="Unmarried">Unmarried</option>
            <option value="Widow">Widow</option>
            <option value="Divorced">Divorced</option>
            
         </select>        </div>
        </div>    

<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-pan">Literacy*</label>
<input type="text" id="input-pan" class="form-control form-control-alternative" placeholder="<?php echo $result['literacy']; ?>" name="literacy" disabled>
</div>
</div>
</div>

</div>
</div>
<hr class="my-4">
<!-- Address -->
<h6 class="heading-small text-muted mb-4">Income Details</h6>
<div class="pl-lg-4">
<div class="row">
<div class="col-md-12">
<div class="form-group focused">
<label class="form-control-label" for="input-address">Source of Income*</label>
<input id="text" class="form-control form-control-alternative" placeholder="<?php echo $result['soi']; ?>" type="text" name="soi" disabled>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4">
<div class="form-group focused">
<label class="form-control-label" for="input-city">Designation*</label>
<input id="text" class="form-control form-control-alternative" placeholder="<?php echo $result['designation']; ?>" type="text" name="designation" disabled>

</div>
</div>
<div class="col-lg-4">
<div class="form-group focused">
<label class="form-control-label" for="input-country">Annual Income*</label>
<input id="number" class="form-control form-control-alternative" placeholder="<?php echo $result['annualIncome']; ?>" type="number" name="annual" disabled>

</div>
</div>

<div class="col-lg-4">
    <div class="form-group focused">
    <label class="form-control-label" for="input-country">Policy Number (optional) </label>
    <input id="number" class="form-control form-control-alternative" placeholder="<?php echo $result['policyNumber']; ?>" type="number" name="policy" disabled>
    
    </div>
    </div>

    
</div>
</div>

<br>

<div class="form-group">
	<label class="checkbox-inline">
		<input type="checkbox" checked="" disabled>I accept the <a href="#">Terms of use</a> &amp; <a href="#">Privacy Policy </a>
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
</script>
		<?php 
	}
	else header("location:http://localhost/SIH/User_Login/After_Login/Pg3.php");
}
?>