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
        return $this->Category;
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
}
?>