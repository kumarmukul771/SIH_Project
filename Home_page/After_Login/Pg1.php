<?php
require_once("ssn.php");


if(isset($_SESSION['email']))
{
  ?>
<!DOCTYPE html>
<html>
<head>

  <title>Loan Information Page 1</title>
  
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
      
      
  
 <script type="text/javascript">

  function verify()
  {
    var result=true;

    // var fileInput = document.getElementById('profile');
    // console.log(fileInput);

    var str2=document.getElementById("janamdin");
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


      var fileInput = document.getElementById('profile');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        result=false;
    }


    var pos=document.getElementById("input-postal-code");
    var code=pos.value;
    if(code.length!=6) 
      {
        alert("Postal Code must be of length 6!");
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
        <div class="circles" id="cir1"><a class="anchors" href="Pg1.php" style="text-decoration: none;color: white; font-size: 20px;">1</a></div>
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
if($result['pg1']==0)
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
<h3 class="mb-0">My account</h3>
</div>
<div class="col-4 text-right">
<a href="#!" class="btn btn-sm btn-primary">Settings</a>
</div>
</div>
</div>
<div class="card-body">

<form action="Pg1_store.php" method="post" onsubmit="return verify()">

<h6 class="heading-small text-muted mb-4">User information</h6>
<div class="pl-lg-4">

<div class="row">

<div class="col-lg-8">
<div class="form-group focused">
<label class="form-control-label" for="input-first-name">Full name*</label>
<input type="text" id="input-first-name" class="form-control form-control-alternative" disabled="" placeholder="<?php echo $res['name']; ?>">
</div>
</div>



</div>

<div class="row">

<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-email">Email address*</label>
<input type="email" id="input-email" class="form-control form-control-alternative" disabled="" placeholder="<?php echo $res['email']; ?>">
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-email">Phone*</label>
<input type="email" id="input-email" class="form-control form-control-alternative" disabled="" placeholder="<?php echo $res['phone']; ?>">
</div>
</div>

</div>

<div class="row">

<div class="col-lg-8">
<div class="form-group focused">
<label class="form-control-label" for="janamdin">Date Of Birth</label>
<input type="date" id="janamdin" name="DOB" class="form-control form-control-alternative" placeholder="Last name" required="" >
</div>
</div>


</div>

</div>
<hr class="my-4">
<!-- Address -->
<h6 class="heading-small text-muted mb-4">Contact information</h6>

<div class="row">
<div class="col-lg-4">
<div class="form-group focused">
<label class="form-control-label" for="input-country">Country*</label>
<input type="text" id="input-country" disabled="" class="form-control form-control-alternative" placeholder="India">
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

<div class="col-lg-4">
<div class="form-group focused">
<label class="form-control-label" for="input-city">City*</label>
<input type="text" id="input-city" name="city" class="form-control form-control-alternative" placeholder="City" required="">
</div>
</div>
</div>

<div class="row">
<div class="col-md-7">
<div class="form-group focused">
<label class="form-control-label" for="input-address">Address*</label>
<input id="input-address" name="Add" class="form-control form-control-alternative" placeholder="Home Address" type="text" required="">
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label class="form-control-label" for="input-country">Postal code*</label>
<input type="number" id="input-postal-code" name="postal" class="form-control form-control-alternative" placeholder="Postal code" required="">
</div>
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
<input type="submit" name="Submit" value="Next" class="btn btn-primary" style="top: 50%; left: 50%; transform: translate(-50%,-50%);" onclick="return verify()">

<!-- <button onclick="calculateAge()">submit</button> -->
<!-- <input type="submit" name="next" value="Next" class="btn btn-primary" style="top: 50%; left: 50%; transform: translate(-50%,-50%);" onclick=" calculateAge()"> -->
<!-- <button onclick="return mukul()">submit</button> -->
</form>
</div>
</div>
</div>
</div>
</div>
</div>
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
<h3 class="mb-0">My account</h3>
</div>
<div class="col-4 text-right">
<a href="#!" class="btn btn-sm btn-primary">Settings</a>
</div>
</div>
</div>
<div class="card-body">

<form action="Pg1_store.php" method="post" onsubmit="return verify()">

<h6 class="heading-small text-muted mb-4">User information</h6>
<div class="pl-lg-4">

<div class="row">

<div class="col-lg-8">
<div class="form-group focused">
<label class="form-control-label" for="input-first-name">Full name*</label>
<input type="text" id="input-first-name" class="form-control form-control-alternative" disabled="" placeholder="<?php echo $res['name']; ?>">
</div>
</div>



</div>

<div class="row">

<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-email">Email address*</label>
<input type="email" id="input-email" class="form-control form-control-alternative" disabled="" placeholder="<?php echo $res['email']; ?>">
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
<label class="form-control-label" for="input-email">Phone*</label>
<input type="email" id="input-email" class="form-control form-control-alternative" disabled="" placeholder="<?php echo $res['phone']; ?>">
</div>
</div>

</div>

<div class="row">

<div class="col-lg-8">
<div class="form-group focused">
<label class="form-control-label" for="janamdin">Date Of Birth</label>
<input type="text" id="janamdin" name="DOB" class="form-control form-control-alternative" placeholder="<?php echo $result['applicantDob']; ?>" disabled=""  >
</div>
</div>


</div>

</div>
<hr class="my-4">
<!-- Address -->
<h6 class="heading-small text-muted mb-4">Contact information</h6>

<div class="row">
<div class="col-lg-4">
<div class="form-group focused">
<label class="form-control-label" for="input-country">Country*</label>
<input type="text" id="input-country" disabled="" class="form-control form-control-alternative" placeholder="India">
</div>
</div>

  <div class="col-md-6">
        <label class="form-control-label" for="input-state">State*</label>
         <div class="col-md-8">
        <select id="mukulstate" name="state" class="form-control" disabled="">
          <option value="0"><?php echo $result['applicantState'] ?></option>
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

<div class="col-lg-4">
<div class="form-group focused">
<label class="form-control-label" for="input-city">City*</label>
<input type="text" id="input-city" name="city" class="form-control form-control-alternative" placeholder="<?php echo $result['applicantCity']; ?>" disabled="" >
</div>
</div>
</div>

<div class="row">
<div class="col-md-7">
<div class="form-group focused">
<label class="form-control-label" for="input-address">Address*</label>
<input id="input-address" name="Add" class="form-control form-control-alternative" placeholder="<?php echo $result['applicantAddress']; ?>" type="text" disabled="" >
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label class="form-control-label" for="input-country">Postal code*</label>
<input type="number" id="input-postal-code" name="postal" class="form-control form-control-alternative" placeholder="<?php echo $result['applicantPostal'];?>" disabled>
</div>
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
<input type="submit" name="Submit" value="Next" class="btn btn-primary" style="top: 50%; left: 50%; transform: translate(-50%,-50%);" disabled="" onclick="return verify()">

<!-- <button onclick="calculateAge()">submit</button> -->
<!-- <input type="submit" name="next" value="Next" class="btn btn-primary" style="top: 50%; left: 50%; transform: translate(-50%,-50%);" onclick=" calculateAge()"> -->
<!-- <button onclick="return mukul()">submit</button> -->
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
</body>
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
</html>
<?php
}

else
  header('location:http://localhost/SIH/User_Login/index.html');
?>

