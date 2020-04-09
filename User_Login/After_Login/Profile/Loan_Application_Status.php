<?php
session_start();
if(!isset($_SESSION['email']))
 header('location:http://localhost/SIH/User_Login/index.html');
else
{
?>
<!DOCTYPE html>
<html>
<head>
  <title>Page</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
  
      .done 
      {
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS1PtHiDVLOKSBSsNlX7NI59DftQBC7f9TbLj77MK0VKMtmfFjG");
        background-size: cover;
      }
      
      .container
      {
        text-align: center;
      }

      .kunal
      {
        width: 100%;
        /*background-color: green;*/
        height: 100px;
        /*position: absolute;*/
        /*top: 400px;*/
      }

      .mukulmuk
      {
        width: 70px;
        height: 70px;
        background-color: red;
        float: left;
        /*position: relative;*/
        /*top: 0%;*/
        /*left: 50%;*/
        transform: translate(100px);  to change y coodrdinate of red boxes
        border: solid 1px grey;
        border-radius: 50%;
        margin-top: 2px;
        text-align: center;
      }

      .mukulmuk span
      {
        position: relative;
        top: 28%;
        font-weight: 200%;
        font-size: 200%;
      }

      .kunal hr
      {
        width: 80%;
        height: 3%;
        background: black;
        position: relative;
        top: 260%;/* change to move hr*/
        left: 0%;
      }

      .kunal a
      {
        text-decoration: none;
        color: black;
      }

      .others
      {

        margin-left:  70px;
      }

      .else 
      {
        margin-left: 50px;
      }
      .row h1
      {
        font-weight: xx-large;
        font-size: 50px;
      }
      .another
      {
        background: none;
        border: none;
        text-align: center;
        font-size: x-small;
        transform: translate(-630%,110%);
      }

    /*  .main-content
      {
        top: 100%;
        left: 50%;
        transform: translate(-50%,-50%);
        position: absolute;
        height: 900px;
        width: 500px;
      }*/
  </style>
</head>
<body>
    <div class="container">
    <div class="row kunal">
      <!-- <hr> -->
      <a href="../Pg1.php"><div class="mukulmuk col-md-2 col-sm-4 else"><span>1</span></div></a>
      <a href="../Pg2.php"><div class="mukulmuk col-md-2 col-sm-4 others"><span>2</span></div></a>
      <a href="../Pg3.php"><div class="mukulmuk col-md-2 col-sm-4 others"><span>3</span></div></a>
      <a href="../Pg4.php"><div class="mukulmuk col-md-2 col-sm-4 others"><span>4</span></div></a>
      <a href="../Pg5.php"><div class="mukulmuk col-md-2 col-sm-4 others"><span>5</span></div></a>
      <a href="../Pg6.php"><div class="mukulmuk col-md-2 col-sm-4 others"><span>6</span></div></a>
      <a href="#"><div class="mukulmuk col-md-2 col-sm-4 others"><span>7</span></div></a>
  </div>

    <!-- <div class="row kunal">
      <div class="mukulmuk col-md-2 col-sm-4 else another"><span>Personal Details</span></div>
      <div class="mukulmuk col-md-2 col-sm-4 others another"><span>Nominee Details</span></div>
      <div class="mukulmuk col-md-2 col-sm-4 others another"><span>Demographic Details</span></div>
      <div class="mukulmuk col-md-2 col-sm-4 others another"><span>Account Details</span></div>
      <div class="mukulmuk col-md-2 col-sm-4 others another"><span>Upload Documents</span></div>
      <div class="mukulmuk col-md-2 col-sm-4 others another"><span>Purpose</span></div>
      <div class="mukulmuk col-md-2 col-sm-4 others another"><span>Upload Documents</span></div>
  </div> -->



<div class="main-content">
<div class="container mt-7">
<!-- Table -->
<h1 class="mb-5" style="text-align: center;font-weight: 700">Why need a loan ?</h1>
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
        
    <input type="submit" name="Submit" id="sub" value="Submit" class="btn btn-primary" style="top: 50%; left: 50%; transform: translate(-50%,-50%);" onclick="return verify()">

</form>
</div>
</div>
</div>
</div>
</div>
</div>

  


  <button onclick="change()">Try it</button>
</body>
<script type="text/javascript">
  function change()
  {
    console.log("Connected");
    var obj=document.querySelectorAll(".mukulmuk");
    // var obj2=document.querySelectorAll(".rem");
    console.log(obj[0]);
    for(var i=0;i<3;i++)
    {
      obj[i].classList.add("done");
      obj[i].innerHTML="";
    }
  }
</script>
</html>
 
<?php
}
?>