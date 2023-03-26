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
			<img src="http://t3.gstatic.com/licensed-image?q=tbn:ANd9GcT-lAkYoetp8U_JsyaMpTucKn9NuXRN9Jz7iX-g63CZJSp0jSgIXQEAnMQO-qTrvBLkCA-WUZpl8fuoFT4" 
					height= 200px width=200px id="hp1"/>
			<p> We hope your experience with us is nothing short of perfection.</p>
			<p> Please feel	free to connect with another user by typing their username into the username box below.</p>
			<p>	If you would like to view your favorite restaurants, please scroll down to the bottom of the
				page to the favorites listings.</p>
			<form><br>
				<label>Username:</label>
				<input name="username" id="username" aria-placeholder="Type Username Here"></input>
				<button type="submit" name="Submit" class="btn btn-primary">Submit</button>
			</form>
        </section>
        <section>
			<form><br><br>
				<h2>Your Matches with (Insert Name from Partner table)</h2>
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
			</form>
		</section>
        <section>
            <h2>Your Favorites</h2>
            <nav>
				<ul class="column-list-3">
					<?php foreach ($restaurants as $restaurant) : ?>
						<li>
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
			</nav>
        </section>
	</main>
<?php }

include '../view/footer.php'; ?>