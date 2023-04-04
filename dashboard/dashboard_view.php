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
	} ?>
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
					<li class="restaurant-item">
						<span class="arrow" onclick="showRestaurantInfo(this)">&#10148</span>
						<!-- Add links or something to make the page more interesting? -->
						<?php echo $restaurant->getName(); ?>
						<?php echo "<a href=//www." . $restaurant->getSiteURL()
								 . " target=\"_blank\" >" . $restaurant->getSiteURL() . 
								   "</a>"; ?>
					</li>
				<?php endforeach; ?>
			</ul>
			<form method="post">
				<input type="submit" name="reset"
						class="button" value="Reset Favorites" />
			</form><br>
        </section>
		<a href="../user/logout.php">Logout</a>
	</main>
<?php }

include '../view/footer.php'; ?>

<script>
  const restaurantItems = document.querySelectorAll('.restaurant-item');
  const restaurantInfo = document.querySelector('#restaurant-info');
  let currentRestaurantIndex = 0;

  document.addEventListener('keydown', (event) => {
    if (event.key === 'ArrowUp') {
      currentRestaurantIndex = (currentRestaurantIndex - 1 + restaurantItems.length) % restaurantItems.length;
      displayRestaurantInfo();
    } else if (event.key === 'ArrowDown') {
      currentRestaurantIndex = (currentRestaurantIndex + 1) % restaurantItems.length;
      displayRestaurantInfo();
    }
  });

  function displayRestaurantInfo() {
    const currentRestaurant = restaurantItems[currentRestaurantIndex];
    const restaurantName = currentRestaurant.textContent;
    // Here you can replace this console.log with the code to display the information of the restaurant, such as an AJAX call to fetch the data from the server.
    console.log(`Displaying information for restaurant: ${restaurantName}`);
    restaurantInfo.textContent = `Information for restaurant "${restaurantName}" will be displayed here.`;
  }
</script>
