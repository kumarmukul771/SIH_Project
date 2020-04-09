<?php
session_start();
session_destroy();
header('location:http://localhost/SIH/Home_page/Home/index.php');
?>