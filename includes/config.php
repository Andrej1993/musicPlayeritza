<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/Belgrade");

	$con = mysqli_connect("localhost", "root", "Lakosepamti12345*", "musicPlayeritza");

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>