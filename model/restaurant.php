<?php
class Restaurant {
    private $id, $name, $rating, $category1, $category2, $category3, $priceTier, $photoURL, $siteURL;

    public function __construct() {
        $this->name = "";
        $this->rating = 0.0;
        $this->category1 = "";
        $this->category2 = "";
        $this->category3 = "";
        $this->priceTier = 0;
        $this->photoURL = "";
        $this->siteURL = "";
    }

    public function getID() {
        return $this->id;
    }
    public function setID($value) {
        $this->id = $value;
    }
	
    public function getName() {
        return $this->name;
    }
    public function setName($value) {
        $this->name = $value;
    }

    public function getRating() {
        return $this->rating;
    }
    public function setRating($value) {
        $this->rating = $value;
    }

    public function getCategory1() {
        return $this->category1;
    }
    public function setCategory1($value) {
        $this->category1 = $value;
    }

    public function getCategory2() {
        return $this->category2;
    }
    public function setCategory2($value) {
        $this->category2 = $value;
    }

    public function getCategory3() {
        return $this->category3;
    }
    public function setCategory3($value) {
        $this->category3 = $value;
    }
	
	public function getCategories() {
		$categories = $this->getCategory1();
		if(isset($this->category2)) {
			$categories .= ', ' . $this->getCategory2();
			if(isset($this->category3)) {
				$categories .= ', ' . $this->getCategory3();
			}
		}
        return $categories;
	}

    public function getPriceTier() {
        return $this->priceTier;
    }
    public function setPriceTier($value) {
        $this->priceTier = $value;
    }

    public function getPhotoURL() {
        return $this->photoURL;
    }
    public function setPhotoURL($value) {
        $this->photoURL = $value;
    }

    public function getSiteURL() {
        return $this->siteURL;
    }
    public function setSiteURL($value) {
        $this->siteURL = $value;
    }

    public function getImageAltText() {
        $imageAlt = 'Image: ' . $this->getName();
        return $imageAlt;
    }
	
	public function getStarRating(){
	
		$starRating = $this->rating;
		
		$output = '';

		$full_stars = floor($starRating);
		$half_star = ceil($starRating - $full_stars);
		//Should be 1 for every odd number.     
		$empty_stars = 5 - $full_stars - $half_star;

		for($i = 0; $i < $full_stars; $i++){
			//Adds all of the full stars
			$output .= '<span class="fa fa-star"></span>';
		}

		if($half_star > 0){
			//Add half star         
			$output .= '<span class="fa fa-star-half-o checked"></span>';
		}

		for($i = 0; $i < $empty_stars; $i++){
			//Fill any remainder with empty stars.
			$output .= '<span class="fa fa-star-o"></span>';
		}
		return $output;
		
	}
}
?>