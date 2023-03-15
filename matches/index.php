<?php
	require('../model/database.php');
	require('../model/restaurant.php');
	require('../model/restaurantDB.php');
	require('../model/userDB.php');

	$restaurantDB = new RestaurantDB();
	$userDB = new UserDB();
	
	$restaurants = $userDB->getFavorites();
	
	//Add if/else statement to include error page if favorites is empty
    //public static function getFavorites() {
    //    if (!isset(self::$db)) {
    //        try {
    //            $restaurant->getName();
    //        } catch (PDOException $e) {
    //            $error_message = $e->getMessage();
    //            include('../errors/matches_error.php');
    //        }
    //    }
    //    return('matches_view.php');
    //}
?>