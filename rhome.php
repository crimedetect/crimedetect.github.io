<!doctype html>
<html lang="en" class="no-js">
<?php
session_start();
$username=$_SESSION['username'];
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>CRIME DETECT</title>
</head>
<body>

	<nav>
		<ul class="cd-primary-nav">
			<li><a href="rhome.php">Home</a></li>
			<li><a href="check.html">Evidence</a></li>
			<li><a href="logout.php">Log out</a></li>
		</ul>
	</nav>

	<main class="cd-content">
		<!-- your content here -->
		<div class="cd-intro">
			<h1>CRIMEDETECT</h1>
		</div>
		<p>
			LAW ENFORCEMENT WEB-APP
		</p>
	</main> <!-- cd-content -->

	<div class="cd-overlay-nav">
		<span></span>
	</div> <!-- cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div> <!-- cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/velocity.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>