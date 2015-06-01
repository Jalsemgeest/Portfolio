<?php
	
	session_start();

	echo $_SESSION['SESS_USER_ID'];

	// Check if a cookie is set.
	if (isset($_COOKIE['user'])) {
		// Get Cookie Key
		$id = $_SESSION['SESS_USER_ID'];
		require_once("config/config.php");
		$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
		
		$key = mysqli_real_escape_string($link, $_COOKIE['user']);

		if (mysqli_query($link, "DELETE FROM COOKIE_KEY WHERE ID = '$id' AND COOKIEKEY = '$key';")) {
			setcookie('user', '', 0, '/');
		}
	}

	session_unset();
	session_destroy();
	session_write_close();
	session_regenerate_id(true);

	header("location:index.php");
	exit();
	
?>
