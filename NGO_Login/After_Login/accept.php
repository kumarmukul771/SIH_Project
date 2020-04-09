<?php
require_once("ssn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<body>
</head>
<body>
<div class="container">
	<div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a href="verify.php">Verify</a>
      </li>
      <li class="nav-item">
        <a href="approve.php">Approve</a>
      </li>
      <li class="nav-item">
        <a href="accept.php">Accept</a>
      </li>
      <li class="nav-item">
        <a href="final.php">Final</a>
      </li>
    </ul>
  </div>
            
  <table class="table table-striped" id="mytable">
    <thead id="make">
      <tr>
        <th>Application ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>More details</th>
        <th>Accept</th>
        <th>Decline</th>
      </tr>
    </thead>

    
	    <tbody>
	    	<?php 
	    	$q="SELECT * from ".$username." WHERE verify=1 and approve=1 and accept=0";
	    	$stmt=$conn2->query($q);
	    	for($i=0;$i<$stmt->num_rows;$i++)
	    	{
	    		$result=mysqli_fetch_array($stmt);
	    		$id=$result['applicationId'];

	    		$sql3="SELECT * from userdetails where applicationId='$id'";
	    		$stmt3=$conn->query($sql3);
	    		$res=mysqli_fetch_array($stmt3);

	    		$email=$res['email'];
	    		$sql4="SELECT * from user where email='$email'";
	    		$st4=$conn->query($sql4);
	    		$res4=mysqli_fetch_array($st4);
	    		?>
	      <tr>
	        <td><?php echo $id; ?></td>
	        <td><?php echo $res4['name']; ?></td>
	        <td><?php echo $res4['email']; ?></td>
	        <td> <a href="More/moredetails.php?id=<?php echo $id;?>">Click Here</a> </td>
	        <td><i class="fa fa-check w3-xlarge" id="<?php echo $i;?>" name="<?php echo $id; ?>" onclick="verified(this.id)"></i> </td>
	        <td><i class="fa fa-close w3-xlarge" id="<?php echo $i;?>" name="<?php echo $id; ?>" onclick="destroy(this.id)"></i> </td>
	      </tr>
	      <?php 
	  }
	  ?>
	    </tbody>

  </table>
</div>		
</body>

<script type="text/javascript">
	var mytablee=document.getElementById("mytable");
	function verified(x)
	{
	var req=new XMLHttpRequest();
	var applicationId=parseInt(document.getElementById(x).getAttribute("name"));
    var myobj={id:applicationId,verify:1,approve:1,accept:1};
    var obj=JSON.stringify(myobj);

    req.open("get","http://localhost/SIH/NGO_Login/After_Login/Update.php?x="+obj,true);
    req.send();

    req.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
        	var ind=parseInt(x)+1;
			mytablee.deleteRow(ind);

			var req2=new XMLHttpRequest();

			// var myobj2={id:applicationId};
		 //    var obj2=JSON.stringify(myobj2);

		 //    req.open("get","http://localhost/SIH/NGO_Login/After_Login/accepted.php?applicationId="+obj2,true);
		 //    req.send();

        }
    }
		
	}

	function destroy(x)
	{
	var req=new XMLHttpRequest();
	var applicationId=parseInt(document.getElementById(x).getAttribute("name"));
    var myobj={user:'<?php echo $username; ?>',id:applicationId};
    var obj=JSON.stringify(myobj);

    req.open("get","http://localhost/SIH/NGO_Login/After_Login/Delete.php?x="+obj,true);
    req.send();

    req.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
        	var ind=parseInt(x)+1;
			mytablee.deleteRow(ind);
			console.log(this.responseText);
        }
    }
		
	}
</script>
</html>