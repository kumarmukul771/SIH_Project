<html>
    <head>
        <title>
            User Login
        </title>
        <link rel="stylesheet" href="login1.css">

        <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    </head>

    <body>

<div class="container login">
                <div class="row">
                    <div class="col-md-3 login-left">
                        <img src="logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Make sure you enter your registered email and corresponding password</p>
                        
                    </div>
                    <div class="col-md-9 login-right">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="login-heading"><strong>Beneficiary Login</strong></h3>

                                <form name="form1" action="Login.php" method="post">     
                                  
                                            <div class="form-group" id="email">
                                            <input type="email" class="form-control" id="emailId" placeholder="Your Email *" value="" required="" name="emailId"/><br>
                                        
                                            <input type="password" class="form-control" placeholder="Password *" value="" required="" name="password"/>
                                        </div>

                                        <a href="Forgot_password/Forgot_password.php" class="asmita">Forgot Your Password</a>
                                       
                                        <input type="submit" class="btnLogin"  value="Login"/>
                                    
                                
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
    </body>

</html>