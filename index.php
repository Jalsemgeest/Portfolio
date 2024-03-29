<?php session_start(); 

	if (isset($_COOKIE['user']) && !isset($_SESSION['SESS_USER_ID'])) {
		require_once('scripts/cookie_login.php');
	}
	
	include_once("scripts/analyticstracking.php");

?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Portfolioliolio</title>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/custom.css" rel="stylesheet">
</head>
<body>
	<section class="main-content">
		<section class="top">
			<div class="centered-top">
				<div class="top-content-menu">
					<?php 	if (isset($_SESSION['SESS_USER_ID'])) { ?>
								<a href="logout.php">Logout</a>
					<?php	} else { ?>
								<a href="login.php">Login</a>
					<?php 	} ?>
				</div>
				<div class="top-image"></div>
				<div class="centered-top-table">
					<div class="top-box">
						<div class="top-content-background"></div>
						<div class="top-content">
							<?php if (isset($_SESSION['SESS_USER_ID'])): ?>
								<h1> <?php print $_SESSION['SESS_FIRST_NAME'] . " " . $_SESSION['SESS_LAST_NAME']; ?> </h1>
							<?php else: ?>
								<h1>Richard Purvis</h1>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="rest">
			<section class="about-me">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate mauris ut maximus posuere. Sed posuere purus sed ex malesuada molestie. Vivamus ac lorem id nisi viverra sodales. Sed massa neque, tempor vel nibh sed, venenatis blandit felis. Nam ornare ligula id lobortis cursus. Maecenas pharetra volutpat mi, vel maximus turpis posuere id. Cras commodo porta massa. Ut lobortis lectus sagittis faucibus condimentum. Aliquam eget lacinia risus. Praesent interdum velit vel ullamcorper porttitor posuere.
				</p>
				<div class="social-content">
					<ul>
						<li>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-github"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-legal"></i></a>
						</li>
					</ul>
				</div>
			</section>
			<section class="content">
				<ul>
					<li>
						<div class="content-piece">
							<h1>Some PDF!</h1>
							<div class="content-piece-title">
								<p>Content</p>
							</div>
						</div>
					</li>
					<li>
						<div class="content-piece">
							<a class="overtop" href="files/JakeAlsemgeestResume.pdf"></a>
							<iframe src="files/JakeAlsemgeestResume.pdf" scrolling="no" seamless></iframe>
							<div class="content-piece-title">
								<p>Jake Alsemgeest Resume</p>
							</div>
						</div>
					</li>
					<li>
						<div class="content-piece">
							<h1>Some PDF!</h1>
							<div class="content-piece-title">
								<p>Content</p>
							</div>
						</div>
					</li>
					<li>
						<div class="content-piece">
							<h1>Some PDF!</h1>
							<div class="content-piece-title">
								<p>Content</p>
							</div>
						</div>
					</li>
					<li>
						<div class="content-piece">
							<div class="content-piece-title">
								<p>Content</p>
							</div>
						</div>
					</li>
					<li>
						<div class="content-piece">
							<div class="content-piece-title">
								<p>Content</p>
							</div>
						</div>
					</li>
				</ul>
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
