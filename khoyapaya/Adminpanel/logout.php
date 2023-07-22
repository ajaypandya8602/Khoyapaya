<?php
	session_start();
	session_destroy();
	header('location:http://localhost/khoyapaya2/Userpanel/login.php');
?>