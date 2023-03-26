<?php include '../view/header.php';

if (!isset($_SESSION["username"])) {
		
		include('../errors/login_error.php');
} else { ?>
	<main class="card-wrap">
		<div class="card-header">
			<img src="<?php echo $restaurant->getPhotoURL(); ?>"
						alt="<?php echo $restaurant->getImageAltText(); ?>">
		</div>
		<div class="card-content">
			<h1 class="card-title"><?php echo $restaurant->getName(); ?></h1>
			<div class="card-text">
				<p><b>Categories:</b> <?php echo $restaurant->getCategory(); ?></p>
				<p><b>Rating:</b> <?php echo $restaurant->getStarRating(); ?></p>
				<p><b>Price: <?php $price = $restaurant->getPriceTier();
					for ($x=$price; $x>0; $x--) {
						echo "$";
					}?></b></p>	
				<p><b>Website:</b> <?php echo "<a href=//www." . $restaurant->getSiteURL()
					. " target=\"_blank\" >" . $restaurant->getSiteURL() . "</a>"; ?></p>
			</div>
			<button class="card-btn" onclick="window.location.href='?action=accept&amp;restaurant_id=<?php 
					echo $restaurant->getID(); ?>';">YES</button>
			<button class="card-btn" onclick="window.location.href='?action=decline&amp;restaurant_id=<?php 
				echo $restaurant->getID(); ?>';">NO</button>
		</div>
	</main>
<?php }
include '../view/footer.php'; ?>