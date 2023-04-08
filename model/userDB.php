<?php
class UserDB {
	
	//Function for adding a restaurant to favorites list
    public function addFavorite($un, $restaurantID) {
        $db = Database::getDB();
        $query = 'UPDATE user_' . $un . '
		          SET isFavorite = 1
				  WHERE restaurantID = :restaurant_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':restaurant_id', $restaurantID);
        $statement->execute();
        $statement->closeCursor();
    }
	
	
	//Function to remove favorite from the favorite list
	public function deleteFavorite($un, $restaurantID) {
        $db = Database::getDB();
        $query = 'UPDATE user_' . $un . '
		          SET isFavorite = 0, isActive = 1
				  WHERE restaurantID = :restaurant_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':restaurant_id', $restaurantID);
        $statement->execute();
        $statement->closeCursor();
    }
	
	//Function for setting partner
	public function setPartner($un, $partner) {
        $db = Database::getDB();
        $query = 'UPDATE users
		          SET partner = :partner_name
				  WHERE username = :user_name';
        $statement = $db->prepare($query);
        $statement->bindValue(':partner_name', $partner);
        $statement->bindValue(':user_name', $un);
        $statement->execute();
        $statement->closeCursor();
    }
	
	//Function for resetting partner
	public function resetPartner($un) {
        $db = Database::getDB();
        $query = 'UPDATE users
		          SET partner = null
				  WHERE username = :user_name';
        $statement = $db->prepare($query);
        $statement->bindValue(':user_name', $un);
        $statement->execute();
        $statement->closeCursor();
    }
	
	//Function for getting partner name
	public function getPartner($un) {
        $db = Database::getDB();
        $query = 'SELECT partner
				  FROM users
				  WHERE username = :user_name';
        $statement = $db->prepare($query);
        $statement->bindValue(':user_name', $un);
        $statement->execute();
		
		$partner = $statement->fetchColumn();
        return $partner;
    }
	
	//Function for calling only favorite restaurants from the database
    public function getFavorites($un) {
        $db = Database::getDB();
        $query = 'SELECT * FROM restaurants r JOIN user_' . $un . ' a
				  ON r.restaurantID = a.restaurantID
				  WHERE isFavorite = 1
                  ORDER BY r.name';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $restaurants = array();
        foreach ($statement as $row) {
            $restaurant = new Restaurant();
			$restaurant->setID($row['restaurantID']);
            $restaurant->setName($row['name']);
			$restaurant->setRating($row['rating']);
            $restaurant->setCategory1($row['cat1']);
            $restaurant->setCategory2($row['cat2']);
            $restaurant->setCategory3($row['cat3']);
			$restaurant->setPriceTier($row['price_tier']);
			$restaurant->setSiteURL($row['site_url']);
            $restaurant->setPhotoURL($row['photo_url']);
            $restaurants[] = $restaurant;
        }
        return $restaurants;
    }
	
	//Function for calling matches between two databases
    public function getMatches($un, $partner) {
        $db = Database::getDB();
        $query = 'SELECT * FROM restaurants r JOIN user_' . $un . ' a
				  ON r.restaurantID = a.restaurantID
				  JOIN user_' . $partner . ' b
				  ON r.restaurantID = b.restaurantID
				  WHERE a.isFavorite = 1 AND b.isFavorite = 1
                  ORDER BY r.name';
        $statement = $db->prepare($query);
        $statement->execute();
        
        $restaurants = array();
        foreach ($statement as $row) {
            $restaurant = new Restaurant();
			$restaurant->setID($row['restaurantID']);
            $restaurant->setName($row['name']);
			$restaurant->setRating($row['rating']);
            $restaurant->setCategory1($row['cat1']);
            $restaurant->setCategory2($row['cat2']);
            $restaurant->setCategory3($row['cat3']);
			$restaurant->setPriceTier($row['price_tier']);
			$restaurant->setSiteURL($row['site_url']);
            $restaurant->setPhotoURL($row['photo_url']);
            $restaurants[] = $restaurant;
        }
        return $restaurants;
    }
	
	//Function for calling only active restaurants from the database
    public function getActive($q) {
        $db = Database::getDB();
        $query = $q;
        $statement = $db->prepare($query);
        $statement->execute();
        
        $restaurants = array();
        foreach ($statement as $row) {
            $restaurant = new Restaurant();
			$restaurant->setID($row['restaurantID']);
            $restaurant->setName($row['name']);
			$restaurant->setRating($row['rating']);
            $restaurant->setCategory1($row['cat1']);
            $restaurant->setCategory2($row['cat2']);
            $restaurant->setCategory3($row['cat3']);
			$restaurant->setPriceTier($row['price_tier']);
			$restaurant->setSiteURL($row['site_url']);
            $restaurant->setPhotoURL($row['photo_url']);
            $restaurants[] = $restaurant;
        }
		shuffle($restaurants);
        return $restaurants;
    }
	
	//Function for removing restaurants from active list
    public function deleteActive($un, $restaurantID) {
        $db = Database::getDB();
        $query = 'UPDATE user_' . $un . '
		          SET isActive = 0
				  WHERE restaurantID = :restaurant_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':restaurant_id', $restaurantID);
        $statement->execute();
        $statement->closeCursor();
    }
	
	//Function for rebuilding actives and deleting favorites
	public function resetFavorites($un) {
		$db = Database::getDB();
		$query =  'UPDATE user_' . $un . '
		           SET isActive = 1, isFavorite = 0';
        $statement = $db->prepare($query);
        $statement->execute();
        $statement->closeCursor();		
	}
	
	//Function for registering user to database
	public function addUser($un, $pw, $jd) {
		$db = Database::getDB();
		$query = 'INSERT INTO users (username, password, trn_date)
				  VALUES (:username, :password, :join_date)';
		$statement = $db->prepare($query);
        $statement->bindValue(':username', $un);
        $statement->bindValue(':password', md5($pw));
        $statement->bindValue(':join_date', $jd);
        if ($statement->execute()) {
			return true;
		} else {
			return false;
		}
        $statement->closeCursor();
	}
	
	//Function for selecting user from database
	public function getUser($un, $pw) {
		$db = Database::getDB();
		$query = 'SELECT * FROM users 
		          WHERE username = :username and password = :password';
		$statement = $db->prepare($query);
        $statement->bindValue(':username', $un);
        $statement->bindValue(':password', md5($pw));
        $statement->execute();
        $row = $statement->rowCount();
        $statement->closeCursor();    
		return $row;
	}
	
	//Function for checking user from database
	public function checkUser($un) {
		$db = Database::getDB();
		$query = 'SELECT * FROM users 
		          WHERE username = :username';
		$statement = $db->prepare($query);
        $statement->bindValue(':username', $un);
        $statement->execute();
        $row = $statement->rowCount();
        $statement->closeCursor();    
		return $row;
	}
	
	//Function for creating user restaurant list table
	public function createList($un) {
		$db = Database::getDB();
		$query = 'CREATE TABLE IF NOT EXISTS user_' . $un . ' (
					`restaurantID` int(11) NOT NULL,
					`isActive` BIT(1) NOT NULL,
					`isFavorite` BIT(1) NOT NULL,
					PRIMARY KEY (`restaurantID`));
				INSERT INTO user_' . $un . ' (`restaurantID`, `isActive`, `isFavorite`)
				SELECT restaurantID, 1, 0
				FROM restaurants;';
		$statement = $db->prepare($query);
        $statement->execute();
        $statement->closeCursor();
	}
	
}
?>