<?php

	session_start();

	require_once('config/config.php');

	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);// or die("Error " . mysqli_error($link)); 

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$email = mysqli_real_escape_string($link, $_POST['email']);
	$password = mysqli_real_escape_string($link, $_POST['password']);
	$remember = $_POST['remember_me'];

	//echo "<h1>Hi " . $email . " " . $password . "</h1>";

?>