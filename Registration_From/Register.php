<html>
    <head>
        <link rel="stylesheet" href="Register.css">

        <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    </head>

    <body>
<!-- **************************************************************  Navbar starts  ************************************************************-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://localhost/SIH/Home_page/Home/index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/SIH/Home_page/partials/Footer/faq/faq.php">FAQs</a>
      </li>
      
    </ul>
    
  </div>
</nav>
  
    <!-- **************************************************************  Navbar ends  ************************************************************-->
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>Create your account on SIH portal</p><br/>
        </div>
        <div class="col-md-9 register-right">
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Register</h3>
                    <form action="Gunjan/register.php" method="post">
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="selectbasic">Designation</label>
                                <div class="col-md-4">
                                  <select id="selectbasic" name="selectbasic" class="form-control">
                                    <option value="1">Mrs.</option>
                                    <option value="2">Ms.</option>
                                    <option value="3">Dr.</option>
                                    <option value="4">Smt.</option>
                                    <option value="5">Prof.</option>
                                    <option value="6">CA</option>
                                    <option value="7">Er.</option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" value="" id="firstName" required="" name="firstName">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Middle Name (Optional)" value=""  name="middleName">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" value="" id="lastName" required="" name="lastName">
                            </div>
                            
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" id="password" class="form-control" placeholder="Password *" value="" required="" name="password">
                            </div>
                            <div class="form-group">
                                <input type="password" id="conPass" class="form-control"  placeholder="Confirm Password *" value="" required="" name="conpassword">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email *" required="" name="email">
                            </div>
                            <div class="form-group">
                                <input type="number" minlength="10" maxlength="10" class="form-control" placeholder="Your Phone *" id="phone" value="" required="" name="phone">
                            </div>
                            <input type="submit" name="submit" class="btnRegister" onclick="validateForm()"  value="Register">

                        </div>
                    </div>
                    </form>
                </div>
                
            </div>
        </div>
                </div>

            </div>
<!-- *****************************************************  Footer starts  **************************************************************-->


    <!-- ************************************************************  Footer ends  *****************************************************************-->

            <script type="text/javascript" src="Gunjan/RegVerify.js"></script>
    </body>
</html>