<?php
session_start();

   $Conn= mysqli_connect('localhost','root','');
   $Selected=mysqli_select_db($Conn,sih);
   $LoanAccNo = $_GET['loanaccno'];
   $Naya = "SELECT * FROM benaam WHERE loanaccno=$LoanAcNo";
   $Execute = mysqli_query($Conn,$Naya);
   $New = mysqli_fetch_array($Execute); 
  
?>
   <div class="container" style="width: 80%">
   <div class="row">
   <div class="col-lg-4 offset-2">
    <h1> Name: </h1>
  </div>
  <div class="col-lg-4">
  	<?php echo $New['username']; ?>
   
   </div><br><br>
</div>

  <div class="row">
   <div class="col-lg-4 offset-2">
    <h1> Email: </h1>
  </div>
  <div class="col-lg-4">
  	<?php echo $New['email']; ?>
   
   </div><br><br>
</div>

<div class="row">
   <div class="col-lg-4 offset-2">
    <h1> Amount: </h1>
  </div>
  <div class="col-lg-4">
  	<?php echo $New['outstandingamount']; ?>
   
   </div><br><br>
</div>

<div class="row">
   <div class="col-lg-4 offset-2">
    <h1> Total: </h1>
  </div>
  <div class="col-lg-4">
  	<?php echo $New['total']; ?>
   
   </div><br><br>
</div>

<div class="row">
   <div class="col-lg-4 offset-2">
    <h1> LastPay: </h1>
  </div>
  <div class="col-lg-4">
  	<?php echo $New['lastpay']; ?>
   
   </div><br><br>
</div>
`
<div class="row">
   <div class="col-lg-4 offset-2">
    <h1> NextPayDate: </h1>
  </div>
  <div class="col-lg-4">
  	<?php echo $New['nextpaydate']; ?>
   
   </div><br><br>
</div>

   </div> 
  


?>