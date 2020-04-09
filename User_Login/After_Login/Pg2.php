<?php
require_once("ssn.php");

if(!isset($_SESSION['email']))
   header("location:http://localhost/SIH/User_Login/index.html"); 
else 
{
	if($result['pg1']==1)
		{
	?>


		<!DOCTYPE html>
		<html>
<head>

			<title></title>
			
			<link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="style.css">

			<meta name="viewport" content="width=device-width,initial-sacle=1">
<style>
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
		      	  var result=true;
				
		      	  var str2=document.getElementById("input-janamdin");
			      var str=str2.value;

			      var birthDay=str[8]+str[9];
			      var birthMonth=str[5]+str[6];
			      
			       var birthYear=str[0]+str[1]+str[2]+str[3];
			       // console.log(birthYear);

			       var todayDate = new Date();
			      var todayYear = todayDate.getFullYear();

			      var todayMonth = todayDate.getMonth();
			      var todayDay = todayDate.getDate();
			      // console.log(todayYear-birthYear);
			      age = todayYear - birthYear;

			      if (todayMonth < birthMonth - 1)
			      {
			        age--;
			      }

			      if (birthMonth - 1 == todayMonth && todayDay < birthDay)
			      {
			        age--;
			      }
			  
			      var aged=parseInt(age);
			    if(aged<18 || aged>80)
			    {
			      alert("Age Restriction!");
			      result=false;
			    }


				  var ip2=document.getElementById("postal");
				  var ip=ip2.value;
				  console.log(ip.length);
				  if(ip.length!=6)
				  {
				  	alert("Postal Code must be of length 6");
				  	ip.focus();
				  	console.log(ip.length);
				  	result=false;
				  }
				 

				  var occ=document.getElementById("mukulocc");
				  var state=document.getElementById("mukulstate");
				  console.log(occ.value);
				  if(occ.value==0)
				  {
				  		alert("Select Occupation for Nominee");
				  		occ.focus();
						result=false;
				  }
				  if(state.value==0)
				  {
				  		alert("Select State");
				  		state.focus();
						result=false;
				  }
				  return result;
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

			if($result['pg2']==0)
			{
		?>
<div class="main-content" style="top: -80px;">
		<div class="container mt-7" id="hr1808">
		<!-- Table -->
		<h1 class="mb-5" style="text-align: center;font-weight: 700">Nominee Details</h1>
		<div class="row">
			
		<div class="col-xl-8 m-auto order-xl-1">
		<div class="card bg-secondary shadow">
		<div class="card-header bg-white border-0">
		<div class="row align-items-center">
		<div class="col-8">
		<h3 class="mb-0">Nominee Details</h3>
		</div>
		<div class="col-4 text-right">
		<a href="#!" class="btn btn-sm btn-primary">Settings</a>
		</div>
		</div>
		</div>
		<div class="card-body">

<form action="Pg2_store.php" method="post" onsubmit="return verify()">

		<h6 class="heading-small text-muted mb-4">User information</h6>
		<div class="pl-lg-4">
			<p id="msg"></p>
		<div class="row">
			
			

		<div class="col-lg-8">
		<div class="form-group focused">
		<label class="form-control-label" for="input-first-name">Full name*</label>
		<input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Full name" name="fullName" required>
		</div>
		</div>

		

		</div>

		<div class="row">

		<div class="col-lg-6">
		<div class="form-group">
		<label class="form-control-label" for="input-email">Email address*</label>
		<input type="email" id="input-email" class="form-control form-control-alternative" placeholder="Email" name="email" required>
		</div>
		</div>



		<div class="col-lg-6">
		<div class="form-group">
		<label class="form-control-label" for="input-relation">Relationship*</label>
		<input type="text" id="input-relation" class="form-control form-control-alternative" placeholder="What's your relation with the person" name="relation" required>
		</div>
		</div>

		</div>

		<div class="row">

		<div class="col-lg-6">
		<div class="form-group focused">
		<label class="form-control-label" for="input-janamdin">Date Of Birth*</label>
		<input type="date" id="input-janamdin" class="form-control form-control-alternative" placeholder="D.O.B" name="dob" required>
		</div>
		</div>



		<div class="form-group">
		  <label class="col-md-12 control-label" for="selectbasic">Occupation</label>
		  <div class="col-md-12">
		    <select id="mukulocc" name="occupation" class="form-control">
		    	<option value="0">Select</option>
		      <option>Unemployed</option>
		      <option>Bussiness</option>
		      <option>Engineer</option>
		      <option>Teacher</option>
		      <option>Lawyer</option>
		      <option>Agriculture</option>
		      <option>Doctor</option>
		      <option>Military</option>
		      <option>Doctor</option>
		      <option>Banking</option>
		      <option>Other services</option>
		    </select>
		  </div>
		</div>
			

		</div>

		</div>
		<hr class="my-4">
		<!-- Address -->
		<h6 class="heading-small text-muted mb-4">Contact information</h6>

		<div class="pl-lg-4">
		<div class="row">
		<div class="col-md-12">
		<div class="form-group focused">
		<label class="form-control-label" for="input-address">Address*</label>
		<input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" type="text" name="address" required>
		</div>
		</div>
		</div>

		<div class="row">


		  <div class="col-lg-6">
			<div class="form-group focused">
			<label class="form-control-label" for="input-country">Country*</label>
			<input type="text" id="input-country" class="form-control form-control-alternative" placeholder="India" disabled>
			</div>
			</div>

			<div class="col-md-6">
				<label class="form-control-label" for="input-state">State*</label>
				 <div class="col-md-8">
				<select id="mukulstate" name="state" class="form-control">
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
		</div>

		<div class="row">

		    <div class="col-lg-6">
		    <div class="form-group focused">
		    <label class="form-control-label" for="input-city">City*</label>
		    <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" name="city" required>
		    </div>
		    </div>

		    <div class="col-lg-6">
		    <div class="form-group">
		    <label class="form-control-label" for="input-country">Postal code*</label>
		    <input type="number" id="postal" class="form-control form-control-alternative" placeholder="Postal code" name="postal" required>
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
		<input type="submit" name="Submit" value="Next" class="btn btn-primary" style="top: 50%; left: 50%; transform: translate(-50%,-50%);">

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
		<div class="container mt-7" id="hr1808">
		<!-- Table -->
		<h1 class="mb-5" style="text-align: center;font-weight: 700">Nominee Details</h1>
		<div class="row">
			
		<div class="col-xl-8 m-auto order-xl-1">
		<div class="card bg-secondary shadow">
		<div class="card-header bg-white border-0">
		<div class="row align-items-center">
		<div class="col-8">
		<h3 class="mb-0">Nominee Details</h3>
		</div>
		<div class="col-4 text-right">
		<a href="#!" class="btn btn-sm btn-primary">Settings</a>
		</div>
		</div>
		</div>
		<div class="card-body">

<form action="Pg2_store.php" method="post" onsubmit="return verify()">

		<h6 class="heading-small text-muted mb-4">User information</h6>
		<div class="pl-lg-4">
			<p id="msg"></p>
		<div class="row">
			
			

		<div class="col-lg-8">
		<div class="form-group focused">
		<label class="form-control-label" for="input-first-name">Full name*</label>
		<input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="<?php echo $result['nomineeName']; ?>" name="fullName"  disabled>
		</div>
		</div>

		

		</div>

		<div class="row">

		<div class="col-lg-6">
		<div class="form-group">
		<label class="form-control-label" for="input-email">Email address*</label>
		<input type="email" id="input-email" class="form-control form-control-alternative" placeholder="<?php echo $result['nomineeEmail']; ?>" name="email"  disabled>
		</div>
		</div>



		<div class="col-lg-6">
		<div class="form-group">
		<label class="form-control-label" for="input-relation">Relationship*</label>
		<input type="text" id="input-relation" class="form-control form-control-alternative" placeholder="<?php echo $result['nomineeRelationship']; ?>" name="relation"  disabled>
		</div>
		</div>

		</div>

		<div class="row">

		<div class="col-lg-6">
		<div class="form-group focused">
		<label class="form-control-label" for="input-janamdin">Date Of Birth*</label>
		<input type="text" id="input-janamdin" class="form-control form-control-alternative" placeholder="<?php echo $result['nomineeDob']; ?>" name="dob"  disabled>
		</div>
		</div>



		<div class="form-group">
		  <label class="col-md-12 control-label" for="selectbasic">Occupation</label>
		  <div class="col-md-12">
		    <select id="mukulocc" name="occupation" class="form-control" disabled>
		    	<option value="0"><?php echo $result['nomineeOccupation']; ?></option>
		      <option>Unemployed</option>
		      <option>Bussiness</option>
		      <option>Engineer</option>
		      <option>Teacher</option>
		      <option>Lawyer</option>
		      <option>Agriculture</option>
		      <option>Doctor</option>
		      <option>Military</option>
		      <option>Doctor</option>
		      <option>Banking</option>
		      <option>Other services</option>
		    </select>
		  </div>
		</div>
			

		</div>

		</div>
		<hr class="my-4">
		<!-- Address -->
		<h6 class="heading-small text-muted mb-4">Contact information</h6>

		<div class="pl-lg-4">
		<div class="row">
		<div class="col-md-12">
		<div class="form-group focused">
		<label class="form-control-label" for="input-address">Address*</label>
		<input id="input-address" class="form-control form-control-alternative" placeholder="<?php echo $result['nomineeAddress']; ?>" type="text" name="address"  disabled>
		</div>
		</div>
		</div>

		<div class="row">


		  <div class="col-lg-6">
			<div class="form-group focused">
			<label class="form-control-label" for="input-country">Country*</label>
			<input type="text" id="input-country" class="form-control form-control-alternative" placeholder="India" disabled>
			</div>
			</div>

			<div class="col-md-6">
				<label class="form-control-label" for="input-state">State*</label>
				 <div class="col-md-8">
				<select id="mukulstate" name="state" class="form-control" disabled>
					<option value="0"><?php echo $result['nomineeState']; ?></option>
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
		</div>

		<div class="row">

		    <div class="col-lg-6">
		    <div class="form-group focused">
		    <label class="form-control-label" for="input-city">City*</label>
		    <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="<?php echo $result['nomineeCity']; ?>" name="city"  disabled>
		    </div>
		    </div>

		    <div class="col-lg-6">
		    <div class="form-group">
		    <label class="form-control-label" for="input-country">Postal code*</label>
		    <input type="number" id="postal" class="form-control form-control-alternative" placeholder="<?php echo $result['nomineePostal']; ?>" name="postal"  disabled>
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
		<input type="submit" name="Submit" value="Next" class="btn btn-primary" style="top: 50%; left: 30%; transform: translate(-50%,-50%);" disabled="">

</form>
		</div>
		</div>
		</div>
		</div>
		</div>
</div>
		</body>
		<?php 
		}
		?>
		<script type="text/javascript">
  var circles=document.querySelectorAll(".circles");
console.log(circles);
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
</html>
		<?php
	}
	else header("location:http://localhost/SIH/User_Login/After_Login/Pg1.php");
}
?>