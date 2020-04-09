myfuc = ()=>
{
	validateForm = ()=>
	{
	    let name = $.trim($("#name").val());
	    
	    let password = $.trim($("#password").val());
	    let conPass = $.trim($("#conPass").val());
	    let phone = $.trim($("#phone").val());

	    if(name == "") 
	    {
	        alert("Your name must be one character long");
	        $("#name").focus();
	        
	        return false;
	    } 

	    if(password == "") 
	    {
	        alert("Password must not empty");
	        $("#password").focus();
	        
	        return false;
	    } 

	    if(password != conPass) 
	    {
	        alert("Password does not matched");
	        $("#conPass").focus();
	        
	        return false;
	    }

	    // if(phone!=10)
	    // {
	    // 	alert("Phone number must be 10 digits long");
	    //     $("#phone").focus();
	        
	    //     return false;
	    // }

	    return true;
	}
}