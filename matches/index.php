<?php
	require('../model/database.php');
	require('../model/restaurant.php');
	require('../model/restaurantDB.php');
	require('../model/userDB.php');

	$restaurantDB = new RestaurantDB();
	$userDB = new UserDB();
	
	$restaurants = $userDB->getFavorites();
	
	//Add if/else statement to include error page if favorites is empty
	
	include('matches_view.php');
?>