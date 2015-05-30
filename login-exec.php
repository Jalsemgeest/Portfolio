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

	/* Create table doesn't return a resultset */
	if ($result = mysqli_query($link, "SELECT FROM USERS email='$email' AND password='$password';") === TRUE) {
	    if (mysqli_num_rows($result) > 0) {
	    	// We have successfully found the user.
	    	while ($obj = mysqli_fetch_assoc($result)) {
				$_SESSION['SESS_USER_ID'] = $obj['ID'];
				$_SESSION['SESS_USER_EMAIL'] = $obj['email'];	    		
	    	}
	    }
	}
	
	mysqli_close($link);
	
	echo $_SESSION['SESS_USER_ID'] . " " . $_SESSION['email'];

	header("location:index.php");
	exit();
	
?>