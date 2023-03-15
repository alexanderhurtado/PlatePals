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
	</div>
<?php }
include '../view/footer.php'; ?>