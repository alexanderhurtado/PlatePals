<?php
	require('../model/database.php');
	require('../model/restaurant.php');
	require('../model/restaurantDB.php');
	require('../model/userDB.php');

	$restaurantDB = new RestaurantDB();
	$userDB = new UserDB();
	
	$action = filter_input(INPUT_POST, 'action');
	if ($action == NULL) {
		$action = filter_input(INPUT_GET, 'action');
		if ($action == NULL) {
			$action = 'show_random';
		}
	} 
	
	//Add if/else statement to throw an error page if active list is empty
	
	include('filter.php');
	
?>