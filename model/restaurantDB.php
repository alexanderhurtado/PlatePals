<?php
class RestaurantDB {
	
	//Function for calling every restaurant from the database
    public function getRestaurants() {
        $db = Database::getDB();
        $query = 'SELECT * FROM restaurants
                  ORDER BY restaurantID';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $restaurants = array();
        foreach ($statement as $row) {
            $restaurant = new Restaurant();
			$restaurant->setID($row['restaurantID']);
            $restaurant->setName($row['name']);
			$restaurant->setRating($row['rating']);
            $restaurant->setCategory($row['category']);
			$restaurant->setPriceTier($row['price_tier']);
			$restaurant->setSiteURL($row['site_url']);
            $restaurant->setPhotoURL($row['photo_url']);
            $restaurants[] = $restaurant;
        }
        return $restaurants;
    }
	
	//Function for calling a single restaurant from the database
    public function getRestaurant($id) {
        $db = Database::getDB();
        $query = 'SELECT * FROM restaurants';
		if ($id > 0) {
			$query .= ' WHERE restaurantID = :restaurant_id';  
		}				  
        $statement = $db->prepare($query);
        $statement->bindValue(':restaurant_id', $id);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();    
        $restaurant = new Restaurant();
		$restaurant->setID($row['restaurantID']);
		$restaurant->setName($row['name']);
		$restaurant->setRating($row['rating']);
		$restaurant->setCategory($row['category']);
		$restaurant->setPriceTier($row['price_tier']);
		$restaurant->setSiteURL($row['site_url']);
		$restaurant->setPhotoURL($row['photo_url']);
        return $restaurant;
    }
}
?>