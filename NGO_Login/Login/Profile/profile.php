<!DOCTYPE html>
<html>
<head>
	<title>Profile </title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="profile2.css">
</head>
<body>


<nav class="navbar navbar-light bg-primary" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="http://localhost/SIH/NGO_Login/logout.php">Logout</a>
</nav>

 
 <div class="container" style=" border: 1px solid; margin-top: 5%; box-shadow: 10px 10px 25px grey; width: 80%; height: 80%; background-color: #f5f5ef">
 	<div class="row">
 		<div class="col-lg-5 col-lg-offset-2">
 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRxyQpRp8-beRgY8TSsDjQmFkk5XCuaox4XiRGkH_KhJYtCBZq9" class="img-responsive" style="height: 60%; width: 60%; margin-left:50% ; margin-top: 50px; background-color: transparent;"> 
  </div>

  <div class="col-lg-5">

   <?php  
      session_start();
      if(!isset($_SESSION['username']))
        header('location:http://localhost/SIH/Home_page/Home/index.php');
      else
      {
    $Conn= mysqli_connect('localhost','root','');
    $Selected=mysqli_select_db($Conn,'sih');  
    $Name=$_SESSION['username'];

    

    // $Naya = "SELECT * FROM ngos WHERE username=$Name"; 
    // $Execute = mysqli_query($Conn,$Naya);
    // $New = mysqli_fetch_array($Execute); 
    
    ?><h1 align="right"> <?php echo $Name;  ?> </h1></div>            
 
   
  </div>
<!-- <button type="button" class="btn btn-primary btn-lg" style="margin-left: 30px;">Accepted Loans </button><br><br>
<button type="button" class="btn btn-info btn-lg" style="margin-left: 30px;">Pending  Loans </button> 
 </div> -->
  <section class="color-pattern-2">

  <div>
            <a href="http://localhost/SIH/NGO_Login/After_Login/View_Accepted_Loans/verify.php"><button class="button button-2 button-2d">Accepted Loans</button></a>
            <a href="http://localhost/SIH/NGO_Login/After_Login/verify.php"><button class="button button-2 button-2d">Pending Loans</button></a>
   </div>
  </section>

<br><br><br>


</div>

</body>
</html>
<?php
}
?>