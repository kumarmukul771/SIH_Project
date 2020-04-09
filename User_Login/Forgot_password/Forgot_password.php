<html>
 <head>
     <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <script type="text/javascript" src="Forgot_password.js"></script>

     <style>
        .row
        {
            top: 20%;
            position: absolute;
            left: 3%;
        }
         #xyz
         {
            height: 20px;
            width: 100%;
            /*background-color: red;*/
            margin-bottom: 5px;
            margin-top: -20px;
            /*text-align: center;*/
            color: green;
         }
         #mukulpicdiv
         {
            width: 45%;
            left: 3%;
            /*background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.3));*/
         }
         #mukulpicdiv img
         {
            width: 100%;
            height: 500px;
            border: 1px solid black;
            border-bottom-right-radius: 50%; 
            background-color: transparent;
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.3));
         }
         #mukul
         {
            margin-left: 4%;
         }
         
     </style>
 </head>
    <body>
            <div class="row">
                 <div  id="mukulpicdiv" class="col-md-5 col-sm-12">
                    <img src="https://www.betterlyf.com/articles/wp-content/uploads/2019/02/woman-empowerment-feature-quotes.jpg">
                                </div> 
            <div class="panel panel-info col-md-5 col-sm-12" id="mukul">
                    <div class="panel-heading">
                        <div class="panel-title">Account Recovery</div>
                        <!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> -->
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal"  method="post" action="Change_password.php">

                        
                                
                                <!-- Form Name -->
                               
                                <!-- Multiple Radios (inline) -->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="radios">Mode of verification</label>
                                  <div class="col-md-4"> 
                                    <label class="radio-inline" for="radios-0" onclick="change()">
                                      <input type="radio" name="radios" id="radios-0" value="email" checked="checked" onclick="change()">
                                      Email
                                    </label> 
                                    <label class="radio-inline" for="radios-1" onclick="change()">
                                      <input type="radio" name="radios" id="radios-1" value="mobile" onclick="change()">
                                      Mobile No.
                                    </label>
                                  </div>
                                </div>
                             
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Email ID" onkeypress="change2()">                                        
                                    </div>
                                    <div style="margin-top:10px" class="form-group">
                                       
                                    <div class="col-sm-12 controls" id="xyz">
                                         <p id="mukul-write"></p>
                                        </div>
                                        <div class="col-sm-12 controls">
                                         
                                            <button type="button" class="btn btn-primary" onclick="sendOtp()" id="mukul-generate">Generate OTP</button>
                                        </div>
                                    </div>
                                
                            <div style="margin-bottom: 25px;padding-top: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="number" class="form-control" name="password" placeholder="Enter OTP">
                                    </div>
                                    
 
                                <div style="margin-top:10px" class="form-group">
                      

                                    <div class="col-sm-12 controls">
                                      <input type="submit" class="btn-success" name="" value="Submit" onclick="return validateOtp()" id="mukul-submit" disabled="">
                                        <!-- <button type="button" class="btn btn-success" onclick="validateOtp()" id="mukul-submit" disabled="">Submit</button> -->
                                    </div>
                                </div> 


                            
                            </form>     



                        </div>                     
                    </div>  
   
            </div>
                           
      
    <!-- </div> -->

    <script type="text/javascript">
        function change()
        {
    if(document.getElementById("radios-0").checked)
    {
        document.getElementById("login-username").type="text";
        document.getElementById("login-username").placeholder="Email ID";
        document.getElementById("login-username").value="";
    }
    else if(document.getElementById("radios-1").checked)
    {
        document.getElementById("login-username").type="number";
        document.getElementById("login-username").placeholder="Mobile no.";
        document.getElementById("login-username").value="";
    }
    document.getElementById("mukul-submit").disabled=true;
   document.getElementById("mukul-write").innerHTML="";
   // document.getElementById("mukul-write").style.color="red";
   document.getElementById("mukul-generate").innerHTML="Generate OTP";
   document.getElementById("mukul-generate").disabled=false;
}
    </script>
</body>
</html>