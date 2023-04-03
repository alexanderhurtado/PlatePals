<?php 
	require('../model/database.php');
	require('../model/restaurant.php');
	require('../model/restaurantDB.php');
	require('../model/userDB.php');
	$userDB = new UserDB();
	
	session_start();
	if (isset($_SESSION["username"])) {
		$user = $_SESSION["username"];
	} else { 
		$user = '';
	}
	if(isset($_POST["action"])) {
		if ($_POST["action"] == 'accept') {
			$restaurantID = $_POST["restaurant_id"];
			$userDB->addFavorite($user, $restaurantID);
			$userDB->deleteActive($user, $restaurantID);
		} else if ($_POST["action"] == 'decline') {
			$restaurantID = $_POST["restaurant_id"];   
			$userDB->deleteActive($user, $restaurantID);
		}
	}
	
	if(isset($_POST["func"])) {
		$query = 'SELECT * FROM restaurants r JOIN user_' . $user . ' a
				  ON r.restaurantID = a.restaurantID
				  WHERE isActive = 1';
	}
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) &&
		!empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
		$query .= " AND r.price_tier BETWEEN '".$_POST["minimum_price"]."' 
			AND '".$_POST["maximum_price"]."'";
	}
	if(isset($_POST["minimum_rating"], $_POST["maximum_rating"]) &&
		!empty($_POST["minimum_rating"]) && !empty($_POST["maximum_rating"])) {
		$query .= " AND r.rating BETWEEN '".$_POST["minimum_rating"]."' 
			AND '".$_POST["maximum_rating"]."'";
	}
	if(isset($_POST["category"])) {
		$category_filter = implode("','", $_POST["category"]);
		$query .= " AND (cat1 IN('".$category_filter."') OR cat2 
			IN('".$category_filter."') OR cat3 IN('".$category_filter."'))";
	}
	
	$restaurantList = $userDB->getActive($query);
	$restaurant = reset($restaurantList);
	
	?>
		<div class="card-header">
			<img src="<?php echo $restaurant->getPhotoURL(); ?>"
						alt="<?php echo $restaurant->getImageAltText(); ?>">
		</div>
		<div class="card-content">
			<h1 class="card-title"><?php echo $restaurant->getName(); ?></h1>
			<div class="card-text">
				<p><b>Categories:</b> <?php echo $restaurant->getCategories(); ?></p>
				<p><b>Rating:</b> <?php echo $restaurant->getStarRating(); ?></p>
				<p><b>Price: <?php $price = $restaurant->getPriceTier();
					for ($x=$price; $x>0; $x--) {
						echo "$";
					}?></b></p>	
				<p><b>Website:</b> <?php echo "<a href=//www." . $restaurant->getSiteURL()
					. " target=\"_blank\" >" . $restaurant->getSiteURL() . "</a>"; ?></p>
				<input type="hidden" id="hidden_restaurant_id" value="<?php echo $restaurant->getID(); ?>" />
			</div>
		</div>