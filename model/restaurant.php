<?php
class Restaurant {
    private $id, $name, $rating, $category, $priceTier, $photoURL, $siteURL;

    public function __construct() {
        $this->name = "";
        $this->rating = 0.0;
        $this->category = "";
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

    public function getCategory() {
        return $this->category;
    }
    public function setCategory($value) {
        $this->category = $value;
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