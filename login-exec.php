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
	//$remember = $_POST['remember_me'];

	if ($result = mysqli_query($link, "SELECT * FROM USERS WHERE email='$email' AND password='$password';")) {
	    if (mysqli_num_rows($result) > 0) {
	    	// We have successfully found the user.
	    	while ($obj = mysqli_fetch_array($result)) {
				$_SESSION['SESS_USER_ID'] = $obj['ID'];
				$_SESSION['SESS_USER_EMAIL'] = $obj['email'];	    
				$_SESSION['SESS_FIRST_NAME'] = $obj['first_name'];
				$_SESSION['SESS_LAST_NAME'] = $obj['last_name'];		
	    	}
	    }
	} else {
		$_SESSION['SESS_LOGIN_FAILED'] = TRUE;
	}
	
	mysqli_close($link);

	header("location:index.php");
	exit();
	
?>
