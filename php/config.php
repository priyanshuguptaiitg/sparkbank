<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn)
  die("DB NOT CONNECTED, Error : --> ".mysqli_connect_error());
?>