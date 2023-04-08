<?php include '../view/header.php';

if (isset($_SESSION["username"])) {
	$user = $_SESSION["username"];
	
	if(isset($_POST['reset'])) {
		$userDB->resetFavorites($user);
		header("Refresh:0");
		include('../errors/login_error.php');
	}
	if(isset($_POST['unbind'])) {
		$userDB->resetPartner($user);
		$_SESSION["partner"] = null;
		header("Refresh:0");
	} 
	if(isset($_POST['remove'])) {
		$dropRest = $_POST['hidden_restaurant_id'];
		$userDB->deleteFavorite($user, $dropRest);
		header("Refresh:0");
	}
	if(isset($_POST['match'])) {
		$username = stripslashes($_REQUEST['username']);
		$check = $userDB->checkUser($username);
		if (!$check) { ?>
			<p style="color:#FF0000" class="first_paragraph">User does not exist. Please try again.</p>
		<?php } else if ($username == $user) { ?>
			<p style="color:#FF0000" class="first_paragraph">You can't match with yourself, dummy.</p>
		<?php } else {
			$userDB->setPartner($user, $username);
			$partner = $username;
			$_SESSION["partner"] = $partner;
			header("Refresh:0");
		}
	}?>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/font-awesome.min.css">
	<main>
        <section>
            <h1>Welcome to PlatePals, <?php echo $_SESSION["username"]?>!</h1>
			<p> We hope your experience with us is nothing short of perfection.</p>
			<p>	If you would like to view your favorite restaurants, please scroll down to the bottom of the
				page to the favorites listings.</p>
			<?php if($_SESSION["partner"] == null) { ?>
			<h2>You are not connected to any other users</h2> 
			<p> Please feel	free to connect with another user by typing their username into the username box below.</p>
			
			<form  action="" method="post" name="match">
				<input type="text" name="username" placeholder="Partner's Username"></input>
				<button type="submit" name="match" class="btn btn-primary">Submit</button>
			</form>
			<?php } ?>
        </section>
		<?php if($_SESSION["partner"] != null) { ?>
			<section>
				<h2>Your Matches with <?php echo $_SESSION["partner"]; ?></h2>
				<ul class="column-list-3">
					<?php foreach ($matches as $match) : ?>
						<li>
							<!-- Add links or something to make the page more interesting? -->
							<?php echo $match->getName(); ?>	
						</li>
					<?php endforeach; ?>
				</ul>
				<form method="post">
					<input type="submit" name="unbind"
							class="button" value="Reset Partner" />
				</form><br>
			</section>
		<?php } ?>
        <section>
            <h2>Your Favorites</h2>
			<?php if (empty($restaurants)) {
				include '../errors/matches_error.php';
			} ?>
			<ul class="column-list-3">
				<?php foreach ($restaurants as $restaurant) : ?>
					<li>
						<?php echo $restaurant->getName(); ?>
						<div class="additional-info">
							<br><p><b>Categories:</b> <?php echo $restaurant->getCategories(); ?></p>
							<p><b>Rating:</b> <?php echo $restaurant->getStarRating(); ?></p>
							<p><b>Price: <?php $price = $restaurant->getPriceTier();
								for ($x=$price; $x>0; $x--) {
									echo "$";
								}?></b></p>
							<p><b>Link: </b><?php echo "<a href=//www." . $restaurant->getSiteURL(). 
									   " target=\"_blank\" >" . $restaurant->getSiteURL() . 
									   "</a>"; ?></p>
							<form method="post">
								<input type="hidden" name="hidden_restaurant_id" 
									value="<?php echo $restaurant->getID(); ?>" />
								<input type="submit" name="remove"
										class="button" value="Remove from Favorites" />
							</form>
						</div>
						<button class="arrow-button" onclick="toggleInfo(this)">></button>						<!-- Add links or something to make the page more interesting? -->
					</li>
				<?php endforeach; ?>
			</ul>
			<form method="post">
				<input type="submit" name="reset"
						class="button" value="Reset All Favorites" />
			</form><br>
        </section>
		<a href="../user/logout.php">Logout</a>
	</main>
<?php }

include '../view/footer.php'; ?>

<script>
	function toggleInfo(button) {
		var info = button.previousElementSibling;
		if (info.style.display === "none") {
			info.style.display = "block";
			button.innerHTML = "^";
		}else {
			info.style.display = "none";
			button.innerHTML = ">";
		}
	}
</script>