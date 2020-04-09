<?php
require_once("ssn.php");

$obj=json_decode($_GET['x'],false);

$q="UPDATE ".$username." SET verify=".$obj->verify." WHERE applicationId=".$obj->id;
$stmt=$conn2->query($q);

$q="UPDATE ".$username." SET approve=".$obj->approve." WHERE applicationId=".$obj->id;
$stmt=$conn2->query($q);

$q="UPDATE ".$username." SET accept=".$obj->accept." WHERE applicationId=".$obj->id;
$stmt=$conn2->query($q);

$q2="UPDATE userdetails SET verified=".$obj->verify.",approved=".$obj->approve.",accepted=".$obj->accept." WHERE applicationId=".$obj->id;
$stmt2=$conn->query($q2);

if($obj->accept==1)
{
	
	require_once('http://localhost/SIH/Home_page/After_Login/Accepted/accepted.php');
}

?>