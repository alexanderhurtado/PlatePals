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
	
	if ($action == 'show_random'){
		$restaurantList = $userDB->getActive();
		$restaurant = reset($restaurantList);
	} else if ($action == 'accept') {
		$restaurantID = filter_input(INPUT_GET, 'restaurant_id', FILTER_VALIDATE_INT);
		$userDB->addFavorite($restaurantID);
		$userDB->deleteActive($restaurantID);
		$restaurantList = $userDB->getActive();
		$restaurant = reset($restaurantList);
	} else if ($action == 'decline') {
		$restaurantID = filter_input(INPUT_GET, 'restaurant_id', FILTER_VALIDATE_INT);   
		$userDB->deleteActive($restaurantID);
		$restaurantList = $userDB->getActive();
		$restaurant = reset($restaurantList);
	}
	
	//Add if/else statement to throw an error page if active list is empty
	
	include('restaurant_view.php');
?>