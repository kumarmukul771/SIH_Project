<?php
require_once("ssn.php");

if(!isset($_SESSION['email']))
   header("location:http://localhost/SIH/User_Login/index.html"); 
else 
{
  if($result['pg6']==1)
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
      .file-field
      {
      	margin-top: 20px;
      }

	</style>

	<script type="text/javascript">

		function verify()
		{
		var result=true;
		var fileInput = document.getElementById('a1');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        result=false;
    }

    var fileInput2 = document.getElementById('a2');
    var filePath2 = fileInput2.value;
    var allowedExtensions2 = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions2.exec(filePath2)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput2.value = '';
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
<?php

      if($result['pg7']==0)
      {
    ?>
<form action="Pg7_store.php" method="post" enctype="multipart/form-data">
 
	   <div class="file-field">
    <div class="btn btn-primary btn-sm float-left" style="left: 50%;transform: translateX(-50%); margin-top: -5px;">
      <span>Upload Aadhar card</span>
      <input type="file" name="aadhar" required="" id="a1">
    </div>
  </div>

  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left" style="left: 50%;transform: translateX(-50%); margin-top: 60px;">
      <span>Upload Your Signature</span>
      <input type="file" name="signature" required="" id="a2">
    </div>
  </div>
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left" style="left: 50%;transform: translateX(-50%); margin-top: 60px; margin-bottom: 60px">
      <span>Upload ITR/Bank statement</span>
      <input type="file" name="ITR" required="" accept="application/pdf">
    </div>
  </div>
		
			
		<input type="submit" name="Submit" value="Submit" class="btn btn-primary" onclick="return verify()" style="top: 90%; left: 45%; position: absolute;">

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
      <form action="Pg7_store.php" method="post" enctype="multipart/form-data">
 
     <div class="file-field">
    <div class="btn btn-primary btn-sm float-left" style="left: 50%;transform: translateX(-50%); margin-top: -5px;">
      <span>Aadhar card</span>
      <input type="file" name="aadhar" required="" id="a1" disabled="">
    </div>
  </div>

  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left" style="left: 0%;transform: translateX(-50%); margin-top: 60px;">
      <span>Signature</span>
      <input type="file" name="signature" required="" id="a2" disabled="">
    </div>
  </div>
  <div class="file-field">
    <div class="btn btn-primary btn-sm float-left" style="left: 50%;transform: translateX(-50%); margin-top: 60px; margin-bottom: 60px">
      <span>ITR/Bank Statement</span>
      <input type="file" name="ITR" required="" accept="application/pdf" disabled="">
    </div>
  </div>
    
      
    <input type="submit" name="Submit" disabled="" value="Submit" class="btn btn-primary" onclick="return verify()" style="top: 90%; left: 45%; position: absolute;">
   <?php }
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
	else header("location:http://localhost/SIH/User_Login/After_Login/Pg6.php");
}
?>