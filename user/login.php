<?php
include("../view/header.php");
require('../model/database.php');
require('../model/restaurant.php');
require('../model/restaurantDB.php');
require('../model/userDB.php');

$restaurantDB = new RestaurantDB();
$userDB = new UserDB();

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$password = stripslashes($_REQUEST['password']);
	$rows = $userDB->getUser($username, $password);
	if($rows==1){
		$_SESSION['username'] = $username;
		
		$partner = $userDB->getPartner($username);
		$_SESSION['partner'] = $partner;
		
		header("Location: ../index.php");
	}else{ ?>
		<div class="form">
			<h3>Username/Password is incorrect</h3>
			<h1>Log In</h1>
			<form action="" method="post" name="login">
				<input type="text" name="username" placeholder="Username" required autofocus />
				<input type="password" name="password" placeholder="Password" required />
				<input name="submit" type="submit" value="Login" />
			</form>
			<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
		</div> <?php
	}
}else{ ?>
	<div class="form">
		<h1>Log In</h1>
		<form action="" method="post" name="login">
			<input type="text" name="username" placeholder="Username" required autofocus />
			<input type="password" name="password" placeholder="Password" required />
			<input name="submit" type="submit" value="Login" />
		</form>
		<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
		<br></br>
		<p>Welcome to PlatePals, the ultimate solution for couples who want to enjoy a romantic
		   dinner without the stress of choosing a restaurant!  Have you ever found yourself in 
		   the endless debate of where to eat with your significant other? We understand how 
		   frustrating it can be to make a decision that both of you will enjoy. That's why we 
		   created PlatePals, a website dedicated to helping couples find the perfect dining spot
		   for their next date night.</p>
	</div>
<?php }
include '../view/footer.php'; ?>