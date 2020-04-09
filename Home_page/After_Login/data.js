function fncity(str)
{
     console.log(str);

    var req=new XMLHttpRequest();
    req.open("get","http://localhost/SIH/User_Login/After_Login/city.php?state="+str,true);
    req.send();
    req.onreadystatechange=function()
    {
        if(req.readyState==4 && req.status==200)
        {
            console.log(req.responseText);
            document.getElementById("city").innerHTML=req.responseText;
        }
    };
}

function changeCity()
{
    var bt=document.getElementById("city");
    var ankit=bt.options[bt.selectedIndex].text;
    console.log(ankit);
    var req1=new XMLHttpRequest();

    req1.open("get","http://localhost/SIH/User_Login/After_Login/Pg6_store.php?city="+ankit,true);
    req1.send();
}
// var bt=document.getElementById("city");
// bt.addEventListener("change",function()
// {  
// var ankit=bt.options[bt.selectedIndex].text;
// console.log(ankit);
//  var req1=new XMLHttpRequest();
//  req1.open("POST","http://localhost/projects_backend/ajax/state_form/data.php?city="+ankit,true);
//  req1.send();


// });

function verify()
{
    var a=document.getElementById("loan");
    var x=document.getElementById("state");
    var y=document.getElementById("city");
    var z=document.getElementById("area");


     if(a.selectedIndex=="0")
    {
         alert("PLease Select Purpose of Loan ");
        return false;
    }
   else  if(x.selectedIndex=="0")
   { 
       alert("Please Select State");
       return false;
   }
   else if(y.selectedIndex=="0")
      {
           alert("PLease Select Your City!");
          return false;
      }
      else if(z.selectedIndex=="0")
      {
           alert("PLease Select Your Area!");
          return false;
      }
  
    else

   return true;
}
