console.log("connecteds");
var mukul;
function sendOtp()
{
    document.getElementById("mukul-generate").innerHTML="Sending OTP";
    document.getElementById("mukul-generate").disabled=true;
	var email=document.getElementById("login-username");
	var emailId=email.value;
	
	var req=new XMLHttpRequest();
    
    var myobj={emailss:emailId};
    // console.log(emailId);

    var obj=JSON.stringify(myobj);

    req.open("get","http://localhost/SIH/Administrator_Login/Forgot_password/Forgot_password_email.php?x="+obj,true);
    req.send();

    req.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            var obj2=JSON.parse(this.responseText);
            if(obj2.ind==1)
                {
                    mukul=obj2.otp;
                    document.getElementById("mukul-generate").innerHTML="OTP Sent";
                    document.getElementById("mukul-submit").disabled=false;
                    document.getElementById("mukul-write").innerHTML="OTP sent successfully!";
                    document.getElementById("mukul-write").style.color="green";
                }
                
            else if(obj2.ind==-1) 
            {
                    document.getElementById("mukul-generate").innerHTML="Generate OTP";
                    document.getElementById("mukul-submit").disabled=true;
                    document.getElementById("mukul-generate").disabled=false;
                    document.getElementById("mukul-write").innerHTML="Account not registered!";
                    document.getElementById("mukul-write").style.color="red";
            }
            else if(obj2.ind==-2)
            {
                   document.getElementById("mukul-submit").disabled=true;
                   document.getElementById("mukul-write").innerHTML="An error occured!";
                   document.getElementById("mukul-write").style.color="red";
                   document.getElementById("mukul-generate").innerHTML="Re-send OTP";
                   document.getElementById("mukul-generate").disabled=false;
            }

        }

        
    }
}

function validateOtp()
{
    var otp=document.getElementById("login-password");
    var otp2=otp.value;
    
    if(mukul==otp2)
    {
      window.location.href="http://localhost/SIH/Administrator_Login/Change_password.php";
        document.getElementById("mukul-write").innerHTML="OTP verified!";
    }
    else 
       document.getElementById("mukul-write").innerHTML="Incorrect OTP";
}


function change2()
{
   document.getElementById("mukul-submit").disabled=true;
   document.getElementById("mukul-write").innerHTML="";
   // document.getElementById("mukul-write").style.color="red";
   document.getElementById("mukul-generate").innerHTML="Generate OTP";
   document.getElementById("mukul-generate").disabled=false;
}