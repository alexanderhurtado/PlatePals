<?php include '../view/header.php';

if (!isset($_SESSION["username"])) {
		
		include('../errors/login_error.php');
} else { ?>
	<main>
		<section>
			<h1><?php echo $restaurant->getName(); ?></h1>
			<div id="left_column">
				<p>
					<!--Should fix images so that it doesn't break layout sometimes-->
					<img src="<?php echo $restaurant->getPhotoURL(); ?>"
						alt="<?php echo $restaurant->getImageAltText(); ?>">
				</p>
			</div>
			<div id="right_column">
				<p><b>Category:</b> <?php echo $restaurant->getCategory(); ?></p>
				<p><b>Rating:</b> <?php echo $restaurant->getStarRating(); ?></p>
				<p><b>Price: <?php
					$price = $restaurant->getPriceTier();
					for ($x=$price; $x>0; $x--) {
						echo "$";
					}?></b></p>
					
				<!--Need to clean up link to shorten urls-->	
				<p><b>Website:</b> <?php echo "<a href=" . $restaurant->getSiteURL() . ">"
					. $restaurant->getSiteURL() . "</a>"; ?></p>
					
				<!--Need to make buttons more interesting-->	
				<button onclick="window.location.href='?action=accept&amp;restaurant_id=<?php 
					echo $restaurant->getID(); ?>';">YES</button>
				<button onclick="window.location.href='?action=decline&amp;restaurant_id=<?php 
					echo $restaurant->getID(); ?>';">NO</button>
			</div>
		</section>
	</main>
<?php }
include '../view/footer.php'; ?>