<?php
session_start();
if(isset($_POST['username']))
{
$_SESSION['username']=$_POST['username']; 

?>

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script type="text/javascript">

chkpwd=function(validate)
{

var str=document.getElementById("new-password").value;
var cnfrm=document.getElementById("confirm-password").value;
if(str.length<8)
{
document.getElementById("demo").innerHTML="Password must contain atleast 8 characters";
demo.style.color="red";
return false;
}

else if(str.search(/[0-9]/)==-1)
{
document.getElementById("demo").innerHTML="Password must contain atleast 1 number";
demo.style.color="red";
return false;
}

else if(str.search(/[a-z]/)==-1)
{
document.getElementById("demo").innerHTML="Password must contain atleast 1 lowercase alphabet";
demo.style.color="red";
return false;
}

else if(str.search(/[A-Z]/)==-1)
{
document.getElementById("demo").innerHTML="Password must contain atleast 1 uppercase alphabet";
demo.style.color="red";
return false;
}

else if(str.search(/[!/@/#/$/%/&/^/(/)/+/-/,/./:/_]/)==-1)
{
document.getElementById("demo").innerHTML="Password must contain atleast 1 special character";
demo.style.color="red";
return false;
}

else
{
if(str===cnfrm)
{
document.getElementById("demo").innerHTML="Successful";
demo.style.color="green";
return true;
}

else
{
document.getElementById("demo").innerHTML="Password did not match";
demo.style.color="red";
return false;
}
}

}

</script>



<html>
<body>


<div class="container">    
<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
<div class="panel panel-info" >
<div class="panel-heading">
<div class="panel-title">Reset Password</div>
</div>     

<div style="padding-top:30px" class="panel-body" >

<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

<p id="demo"></p>
<form id="loginform" class="form-horizontal"  action="Change2_password.php" method="post">


<div style="margin-bottom: 25px" class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="new-password" type="password" class="form-control" name="pass" placeholder="Enter New Password" required>                                      
</div>


<div  class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="confirm-password" type="password" class="form-control" name="pass" placeholder="Confirm Password" required>
</div>






<div style="margin-top:10px" class="form-group">


<div class="col-sm-12 controls">
	<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="submit" class="btn btn-success" onclick="return chkpwd()">Submit</button>
  </div>
</div>
</div>
</div> 

</form>     

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
header("location:http://localhost/SIH/User_Login/Forgot_password/Forgot_password.php");
?>