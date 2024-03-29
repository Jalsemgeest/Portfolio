<!DOCTYPE html>

<?php
	session_start();
	
	if (isset($_SESSION['SESS_USER_ID']) || isset($_COOKIE['user'])) {
		header("location:index.php");
		exit();
	}
	
	include_once("scripts/analyticstracking.php");
	
?>

<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Portfolioliolio | Login</title>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/custom.css" rel="stylesheet">
</head>
<body>
	<section class="main-content">
		<section class="top">
			<div class="centered-top">
				<div class="top-image"></div>
				<div class="centered-top-table">
					<div class="top-box">
						<div class="top-content-background"></div>
						<div class="top-content">
							<h1>Login</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="rest">
			<section class="about-me">
				<form class="login-form" method="post" action="login-exec.php">
					<div class="login-email">
						<label for="email">Email:</label>
						<input name="email" type="email" id="email" required/>
					</div>
					<div class="login-password">
						<label for="password">Password:</label>
						<input name="password" type="password" id="password" required/>
					</div>
					<div class="login-button-area">
						<button type="submit">Login</button>
						<input name="remember_me" id="remember_me" type="checkbox" value="remember"/>
						<label for="remember_me">Remember Me</label>
					</div>
				</form>
			</section>
		</section>
	</section>
	<footer>
		<div class="footer-content">
			<p>Profolio.com</p>
		</div>
	</footer>
</body>	
</html>
