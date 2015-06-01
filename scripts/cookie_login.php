<?php

	require_once('config/config.php');

	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

	$cookie_content = mysqli_real_escape_string($link, $_COOKIE['user']);

	if ($result = mysqli_query($link, "SELECT * FROM COOKIE_KEY NATURAL JOIN USERS WHERE COOKIEKEY = '$cookie_content';")) {
		if (mysqli_num_rows($result) > 0) {
			while ($obj = mysqli_fetch_array($result)) {
				$_SESSION['SESS_USER_ID'] = $obj['ID'];
				$_SESSION['SESS_USER_EMAIL'] = $obj['email'];	    
				$_SESSION['SESS_FIRST_NAME'] = $obj['first_name'];
				$_SESSION['SESS_LAST_NAME'] = $obj['last_name'];
			}
		}
	} else {
		// Delete Cookie
		setcookie('user','',0,'/');
	}

?>
