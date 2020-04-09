var mukul;

function sendOtp()
{
	if(document.getElementById("radios-0").checked)
	{
		sendOtpEmail();
	}
	else if(document.getElementById("radios-1").checked)
	{
		sendOtpPhone();
	}
}
function validateOtp()
{
	if(document.getElementById("radios-0").checked)
	{
		return validateOtpEmail();
	}
	else if(document.getElementById("radios-1").checked)
	{
		return validateOtpPhone();
	}
}

function sendOtpEmail()
{
    document.getElementById("mukul-generate").innerHTML="Sending OTP";
    document.getElementById("mukul-generate").disabled=true;
	var email=document.getElementById("login-username");
	var emailId=email.value;
	
	var req=new XMLHttpRequest();
    
    var myobj={emailss:emailId};
    // console.log(emailId);

    var obj=JSON.stringify(myobj);

    req.open("get","http://localhost/SIH/User_login/Forgot_password/Email/Forgot_password_email.php?x="+obj,true);
    req.send();

    req.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            // document.getElementById("mukul-generate").innerHTML=this.responseText;
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

function validateOtpEmail()
{
	var otp=document.getElementById("login-password");
	var otp2=otp.value;
	
    if(mukul==otp2)
        return true;
    else 
    {
       document.getElementById("mukul-write").innerHTML="Incorrect OTP";
       return false
    }
}

var mukul2;
function sendOtpPhone()
{
    document.getElementById("mukul-generate").innerHTML="Sending OTP";
    document.getElementById("mukul-generate").disabled=true;
	var mobileno=document.getElementById("login-username");
	var mobileno2=mobileno.value;
	
	var req=new XMLHttpRequest();
    
    var myobj={mobile:mobileno2};

    var obj=JSON.stringify(myobj);

    req.open("get","http://localhost/SIH/User_Login/Forgot_password/Phone/Forgot_password_mobile.php?x="+obj,true);
    req.send();

    req.onreadystatechange=function()
    {
        console.log("Entered");
            if(this.readyState==4 && this.status==200)
        {

            var obj2=JSON.parse(this.responseText);
            if(obj2.ind==1)
                {

                    mukul2=obj2.otp;
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

function validateOtpPhone()
{
	var otp=document.getElementById("login-password");
	var otp2=otp.value;
	

    if(mukul2==otp2)
    	return true;
	else if(this.responseText==-3)
    {
       document.getElementById("mukul-write").innerHTML="Incorrect OTP";
       return false;
    }
}
function change2()
{
   document.getElementById("mukul-submit").disabled=true;
   document.getElementById("mukul-write").innerHTML="";
   // document.getElementById("mukul-write").style.color="red";
   document.getElementById("mukul-generate").innerHTML="Generate OTP";
   document.getElementById("mukul-generate").disabled=false;
}