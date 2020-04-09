<?php

	$conn = new mysqli('localhost', 'root', '', 'sih');

	if (mysqli_connect_error())
	{
		die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
	}
?>