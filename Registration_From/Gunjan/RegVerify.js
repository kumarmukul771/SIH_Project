console.log("connected");

onload = ()=>
{
	validateForm = ()=>
	{
	    let first = $.trim($("#firstName").val());
	    let last = $.trim($("#lastName").val());
	    
	    let password = $.trim($("#password").val());
	    let conPass = $.trim($("#conPass").val());

	    let email = $.trim($("#email").val());
	    let phone = $.trim($("#phone").val());

	    if(first == "") 
	    {
	        alert("Enter your first name");
	        $("#firstName").focus();
	        
	        return false;
	    } 

	    if(last == "") 
	    {
	        alert("Enter your last name");
	        $("#lastName").focus();
	        
	        return false;
	    } 

	    if( !isValidEmail(email) ) 
	    {
	        alert("Enter the valid email");
	        $("#email").focus();
	        
	        return false;
	    }

	    if(password == "") 
	    {
	        alert("Enter password");
	        $("#password").focus();
	        
	        return false;
	    } 

	    if(password != conPass) 
	    {
	        alert("Password does not matched");
	        $("#conPass").focus();
	        
	        return false;
	    }
	    if(phone.length != 10)
	    {
	    	alert("Mobile no. must be of length 10")
	    	$("#phone").focus()

	    	return false;
	    }



	    return true;
	}

	isValidEmail = (email)=> 
	{
	    let regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	    
	    let status=regex.test(email);

	    return status;
	}
}