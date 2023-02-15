<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1><?php echo $restaurant->getName() . " Information"; ?></h1>
        <div id="left_column">
            <p>
                <img src="<?php echo $restaurant->getPhotoURL(); ?>"
                    alt="<?php echo $restaurant->getImageAltText(); ?>">
            </p>
        </div>
        <div id="right_column">
            <p><b>Category:</b> <?php echo $restaurant->getCategory(); ?></p>
			
			<!--These should be formatted as icons-->
            <p><b>Rating:</b> <?php echo $restaurant->getRating(); ?></p>
            <p><b>Price:</b> <?php echo $restaurant->getPriceTier(); ?></p>
			
            <p><b>Website:</b> <?php echo $restaurant->getSiteURL(); ?></p>
            
        </div>
    </section>
</main>
<?php include '../view/footer.php'; ?>