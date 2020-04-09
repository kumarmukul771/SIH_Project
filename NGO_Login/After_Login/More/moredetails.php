<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
	// if(!isset($_SESSION['username']))
	// 	header('location:http://localhost/SIH/NGO_Login/Login/index.php');
	// else
	// 	{
		
			$id=$_GET['id'];

			$conn=new mysqli('localhost','root','','sih');
			$q="SELECT * from userdetails where applicationId=".$id;
			$stmt=$conn->query($q);

			$result=mysqli_fetch_array($stmt);
			$email=$result['email'];

			$q2="SELECT * from user where email='$email'";
			$stmt2=$conn->query($q2);

			$result2=mysqli_fetch_array($stmt2);
			?>

			<div class="container">
				<div class="card text-center">
				<h1 style="font-weight: bold; font-size: 49px;">Applicant Details</h1><hr style="width: 30%;position: relative;left: 35%"><br><br>
				<h3><b>Application ID</b> :<?php echo " ".$id; ?><h3>
				<h3><b>Name</b> :<?php echo " ".$result2['name'];?></h3>
				<h3><b>Email ID</b> :<?php echo " ".$email;?></h3>
				<h3><b>Phone No.</b> :<?php echo " ".$result2['phone']; ?></h3>
				<h3><b>Applicant D.O.B</b> :<?php echo " ".$result['applicantDob']; ?></h3>
				<h3><b>Applicant State</b> :<?php echo " ".$result['applicantState']; ?></h3>
				<h3><b>Applicant City</b> :<?php echo " ".$result['applicantCity']; ?></h3>
				<h3><b>Applicant Address</b> :<?php echo " ".$result['applicantAddress']; ?></h3>
				<h3><b>Aadhar Card No.</b> :<?php echo " ".$result['aadhar']; ?><h3>
				<br><br><hr>


				<h1>Nominee Details</h1>
				<h3><b>Name</b> :<?php echo " ".$result['nomineeName']; ?><h3>
				<h3><b>Relation Ship with applicant</b> :<?php echo " ".$result['nomineeRelationship'];?></h3>
				<h3><b>Email ID</b> :<?php echo " ".$result['nomineeEmail'];?></h3>
				<h3><b>Occupation</b> :<?php echo " ".$result2['phone']; ?></h3>
				<h3><b>D.O.B. </b>:<?php echo " ".$result['nomineeDob']; ?></h3>
				<h3><b>State</b> :<?php echo " ".$result['nomineeState']; ?></h3>
				<h3><b>City</b> :<?php echo " ".$result['nomineeCity']; ?></h3>
				<h3><b>Address</b> :<?php echo " ".$result['nomineeAddress']; ?></h3>
				<br><br><hr style="width: 100%;">


				<h1>Account Details of applicant</h1>
				<h3><b>Account Holder Name</b> :<?php echo " ".$result['accountHolderName']; ?><h3>
				<h3><b>Account Number</b> :<?php echo " ".$result['accountNumber'];?></h3>
				<h3><b>Account IFSC</b> :<?php echo " ".$result['accountIFSC'];?></h3>
				<br><br><hr style="width: 100%;">

				<h1>Demographic & Education Details</h1>
				<h3><b>Father/Husband Name</b> :<?php echo " ".$result['fatherHusbandName']; ?><h3>
				<h3><b>Count of family members</b> :<?php echo " ".$result['noFamilyMembers'];?></h3>
				<h3><b>Marital Status</b> :<?php echo " ".$result['maritalStatus'];?></h3>
				<h3><b>Literacy</b> :<?php echo " ".$result['literacy'];?></h3>
				<h3><b>Designation</b> :<?php echo " ".$result['designation'];?></h3>
				<br><br><hr style="width: 100%;">

				<h1>Financial Details</h1>
				<h3><b>Annual Income(in Rupees)</b> :<i class="fa fa-rupee"></i><?php echo " ".$result['annualIncome']; ?><h3>
				<h3><b>Property Worth(in Rupees)</b> :<i class="fa fa-rupee"></i><?php echo " ".$result['propertyWorth'];?></h3>
				<h3><b>Property Location</b> :<?php echo " ".$result['propertyLocation'];?></h3>
				<h3><b>Literacy</b> :<?php echo " ".$result['literacy'];?></h3>
				<h3><b>Designation</b> :<?php echo " ".$result['designation'];?></h3>
				<br><br><hr style="width: 100%;">



				<h1>Loan Purpose & Details</h1>
				<h3><b>Loan Amount</b> :<i class="fa fa-rupee"></i><?php echo " ".$result['amount']; ?><h3>
				<h3><b>Tenure(in years)</b> :<?php echo " ".$result['tenure']; ?><h3>
				<h3><b>Purpose Field</b> :<?php echo " ".$result['purpose']; ?><h3>
				<h3><b>Purpose in detail</b> :<?php echo " ".$result['specifyPurpose']; ?><h3>
				<h3><b>Work Experience</b> :<?php echo " ".$result['workExperience']; ?><h3>
				<h3><b>Project State</b> :<?php echo " ".$result['projectState']; ?><h3>
				<h3><b>Project District</b> :<?php echo " ".$result['projectDistrict']; ?><h3>
				<h3><b>Project Area</b> :<?php echo " ".$result['projectArea']; ?><h3>
				<br><br><hr>

				</div>
			</div>
		
	

</body>
</html>

