<?php
require('../model/database.php');
require('../model/restaurant.php');
require('../model/restaurantDB.php');

$restaurantDB = new RestaurantDB();

//Need to make the random bounds dynamic
$restaurant = $restaurantDB->getRestaurant(rand(1,20));

include('restaurant_view.php');

?>