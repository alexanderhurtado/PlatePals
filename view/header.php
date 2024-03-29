<!DOCTYPE html>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<html>
<head>
    <title>PlatePals Restaurant Finder</title>
	
	<script src="/PlatePals/js/jquery-1.10.2.min.js"></script>
    <script src="/PlatePals/js/jquery-ui.js"></script>
    <script src="/PlatePals/js/bootstrap.min.js"></script>
	<script src="/PlatePals/restaurant/filter.php"></script>
	
    <link rel="stylesheet" href="/PlatePals/css/bootstrap.min.css">
    <link rel="stylesheet" href="/PlatePals/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="/PlatePals/css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<nav class="navibar">
	<ul>
		<li><a id="text/css" href="http://localhost:8000/PlatePals/restaurant/">Restaurants</a></li>
		<!-- <li><a id="text/css" href="/PlatePals/matches">Your Matches</a></li> -->
		<li><a id="text/css" href="http://localhost:8000/PlatePals/about">About</a></li>
		<!-- <li><a id="text/css" href="/PlatePals/dashboard">Dashboard</a></li> -->
		<li class="float"> <?php
			if (!isset($_SESSION["username"])) { ?>
				<a href="http://localhost:8000/PlatePals/user/login">Sign In</a>
			<?php } else { ?>
				<a href="http://localhost:8000/PlatePals/dashboard/">
					Dashboard:  <?php echo $_SESSION["username"] ?>
				</a>
			<?php } ?>
			<script>
			// Get the current URL
			var currentUrl = window.location.href;

			// Loop through each link in the navigation menu
			var links = document.querySelectorAll('.navibar ul li a');
			for (var i = 0; i < links.length; i++) {
				var link = links[i];

				// If the link's href attribute matches the current URL, add the "active" class
				if (link.href === currentUrl) {
				link.classList.add('active');
				}
			}
			</script>
		</li>
	</ul>
</nav>