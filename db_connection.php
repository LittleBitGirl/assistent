<?php
	$servername = "localhost";
	$username = "id6532568_root";
	$password = "assistant";
	$dbname = "id6532568_assistent";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset("utf8");
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} else{

	}

?>
