<?php
// conection to database
$con = mysqli_connect("localhost","root","","cart");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>