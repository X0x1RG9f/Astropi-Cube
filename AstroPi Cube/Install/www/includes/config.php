<?php
	$servername = "localhost";
	$username = "astropi";
	$password = "@str0pi";
	$dbname = "astropi";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection to DB failed");
	}
?>
