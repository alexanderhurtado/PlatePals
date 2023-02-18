<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1><?php echo $restaurant->getName(); ?></h1>
        <div id="left_column">
            <p>
                <img src="<?php echo $restaurant->getPhotoURL(); ?>"
                    alt="<?php echo $restaurant->getImageAltText(); ?>">
            </p>
        </div>
        <div id="right_column">
            <p><b>Category:</b> <?php echo $restaurant->getCategory(); ?></p>
			
			<!--These should be formatted as icons-->
            <p><b>Rating:</b> <?php echo $restaurant->getStarRating(); ?></p>
            <p><b>Price: <?php
				$price = $restaurant->getPriceTier();
				for ($x=$price; $x>0; $x--) {
					echo "$";
				}?></b></p>
            <p><b>Website:</b> <?php echo "<a href=" . $restaurant->getSiteURL() . ">"
				. $restaurant->getSiteURL() . "</a>"; ?></p>
        </div>
    </section>
</main>
<?php include '../view/footer.php'; ?>