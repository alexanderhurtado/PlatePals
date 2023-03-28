<?php
	require('../model/database.php');
	require('../model/restaurant.php');
	require('../model/restaurantDB.php');
	require('../model/userDB.php');

	$restaurantDB = new RestaurantDB();
	$userDB = new UserDB();
	
	session_start();
	if (isset($_SESSION["username"])) {
		$user = $_SESSION["username"];
		$partner = $_SESSION["partner"];
		$restaurants = $userDB->getFavorites($user);
		$matches = $userDB->getMatches($user, $partner);
	}
	include('dashboard_view.php');
?>