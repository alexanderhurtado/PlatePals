<?php include '../view/header.php';

if (isset($_SESSION["username"])) {
	$user = $_SESSION["username"];
} else { 
	$user = '';
}

if (empty($restaurants)) {
	include '../errors/matches_error.php';
}

if (!isset($_SESSION["username"])) {
		
	include('../errors/login_error.php');
		
} else { 
	$user = $_SESSION["username"];
	
	if(isset($_POST['reset'])) {
		$userDB->resetFavorites($user);
		header("Refresh:0");
	}  
  ?>
	<main>
        <section>
            <h1>Welcome <?php echo $_SESSION["username"]?> to PlatePals!</h1>
        </section>
        <section>
			<h2>Your Matches</h2>
			<nav>
				<ul class="column-list-3">
					<?php foreach ($restaurants as $restaurant) : ?>
						<li>
							<!-- Add links or something to make the page more interesting? -->
							<?php echo $restaurant->getName(); ?>	
						</li>
					<?php endforeach; ?>
				</ul>
				<form method="post">
					<input type="submit" name="reset"
							class="button" value="RESET MATCHES" />
				</form>
			</nav>
		</section>
        <section>
            <h2>Your Favorites</h2>
            <nav>
				<ul class="column-list-3">
					<?php foreach ($restaurants as $restaurant) : ?>
						<li>
							<!-- Add links or something to make the page more interesting? -->
							<?php echo $restaurant->getName(); ?>	
						</li>
					<?php endforeach; ?>
				</ul>
			</nav>
        </section>
	</main>
<?php }

include '../view/footer.php'; ?>