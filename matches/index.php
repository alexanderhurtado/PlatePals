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
		$restaurants = $userDB->getFavorites($user);
	}
	
  /*if($restaurant = 0){
    $error_message= $e->getMessage();
    include('../errors/matches_error.php');
    exit();
  }*/
	include('matches_view.php');
?>