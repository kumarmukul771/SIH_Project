<?php
require_once("ssn.php");
$obj=json_decode($_GET['x'],false);

$q="DELETE FROM ".$username." WHERE applicationId=".$obj->id;
$stmt=$conn2->query($q);

$q2="UPDATE userdetails SET submitted=0,verified=0,approved=0,accepted=-1,applicationId=0 WHERE applicationId=".$obj->id;
$stmt2=$conn->query($q2);
?>