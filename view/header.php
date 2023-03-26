<!DOCTYPE html>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
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
		<li><a id="text/css" href="/PlatePals/restaurant">Start</a></li>
		<!-- <li><a id="text/css" href="/PlatePals/matches">Your Matches</a></li> -->
		<li><a id="text/css" href="/PlatePals/about">About</a></li>
		<!-- <li><a id="text/css" href="/PlatePals/dashboard">Dashboard</a></li> -->
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

<?php 
	  /*if($this->uri->segment(2)=="restaurant"){echo 'active';}
	    if($this->uri->segment(2)=="Your Matches"){echo 'active';}
		if($this->uri->segment(2)=="About"){echo 'active';}*/
?>