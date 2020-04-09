<?php
require_once("ssn.php");
$q="SELECT * FROM userdetails WHERE submitted=1 and verfied=0 and approved=0";
$stmt=$conn->query($q);
$result=mysqli_fetch_array($stmt);
?>