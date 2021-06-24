<?php
	// DB hostname
	$servername = "185.30.124.110";

	// DB username
	$username = "k26606_s20329";

	// DB password
	$password = "d8a11db8adc1";

	// DB name
	$dbname = "db_20329";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}

	mysqli_set_charset($conn, "utf8");
?>
