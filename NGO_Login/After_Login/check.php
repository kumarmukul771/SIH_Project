<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
    </ul>
  </div>
            
  <table class="table table-striped" id="mytable">
    <thead id="make">
      <tr>
        <th>Application ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Verify</th>
        <th>Decline</th>
      </tr>
    </thead>


		<tbody>
	      <tr>
	        <td>Approve</td>
	        <td>Approve</td>
	        <td>Approve</td>
	        <td><i class="fa fa-check w3-xlarge" id="0" onclick="verify(this.id)"></i> </td>
	        <td><i class="fa fa-close w3-xlarge"></i> </td>
	      </tr>
	      <tr>
	        <td>Approve</td>
	        <td>Approve</td>
	        <td>Approve</td>
	        <td><i class="fa fa-check w3-xlarge" id="1" name="3" onclick="verify(this.id)"></i> </td>
	        <td><i class="fa fa-close w3-xlarge"></i> </td>
	      </tr>
	      <tr>
	        <td>Approve</td>
	        <td>Approve</td>
	        <td>Approve</td>
	        <td><i class="fa fa-check w3-xlarge" id="2" onclick="verify(this.id)"></i> </td>
	        <td><i class="fa fa-close w3-xlarge"></i> </td>
	      </tr>
	    </tbody>	

  </table>
</div>		
</body>
<script type="text/javascript">
	var mytablee=document.getElementById("mytable");
	console.log(mytablee.row(1));
	function verify(x)
	{
		var mukul=document.getElementById(x);
		console.log(x);
		var id=parseInt(mukul.getAttribute("name"));
		console.log(id);
		var ind=parseInt(x);
		ind+=1;
		// mytablee.deleteRow(ind);
	}
</script>
</html>