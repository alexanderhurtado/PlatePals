<?php include '../view/header.php'; ?>
<?php 
	 if(isset($_POST['reset'])) {
        $userDB->resetFavorites();
		header("Refresh:0");
	}
?>
<main>
    <section>
        <h1>Your Matches</h1>
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
</main>
<?php include '../view/footer.php'; ?>