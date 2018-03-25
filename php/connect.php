<?php

	$username = "root";
	$password = "sagar";
	$servername = "localhost";
	$dbname = "byteme";
	
	$con = mysqli_connect($servername,$username,$password,$dbname) or die("\n Connection Failed !" . $con->connect_error);
?>