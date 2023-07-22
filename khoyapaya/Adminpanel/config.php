<?php
	$username="root";
	$password="";
	$host="localhost";
	$database="khoyapaya";

	$conn=mysqli_connect("$host","$username","$password") or die("Server Error");
	mysqli_select_db($conn,"$database") or die("Database error");
?>