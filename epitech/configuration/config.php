<?php 

	$servername = "localhost	;
	$dbName = "wadie";
	$username = "wadie";
	$password = "Maissa_862018";


	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	// echo "Connected to data Base";


?>
