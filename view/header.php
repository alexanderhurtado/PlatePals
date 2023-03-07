<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>PlatePals Restaurant Finder</title>
    <link rel="stylesheet" type="text/css" href="/PlatePals/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<nav class="navbar">
	<ul>
		<li><a href="/PlatePals/restaurant">Start</a></li>
		<li><a href="/PlatePals/matches">Your Matches</a></li>
		<li><a href="/PlatePals/about">About</a></li>
		<li class="float"> <?php
			if (!isset($_SESSION["username"])) { ?>
				<a href="/PlatePals/user/login">Sign In</a>
			<?php } else { ?>
				<a href="/PlatePals/dashboard">
					<?php echo $_SESSION["username"] ?>
				</a>
			<?php } ?>
		</li>
	</ul>
</nav>