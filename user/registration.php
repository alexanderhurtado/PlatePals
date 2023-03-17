<?php
include("../view/header.php");
require('../model/database.php');
require('../model/restaurant.php');
require('../model/restaurantDB.php');
require('../model/userDB.php');

$restaurantDB = new RestaurantDB();
$userDB = new UserDB();

if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$password = stripslashes($_REQUEST['password']);
	$trn_date = date("Y-m-d H:i:s");
	
	$check = $userDB->checkUser($username);
	if ($check) { ?>
		<h3>Error. Username already taken. Please try again.</h3>
		<div class="form">
			<h1>Registration</h1>
			<form name="registration" action="" method="post">
				<input type="text" name="username" placeholder="Username" required autofocus /><br>
				<input type="password" name="password" placeholder="Password" required /><br>
				<input type="submit" name="submit" value="Register" />
			</form><br>
		</div> <?php
	} else {
		$result = $userDB->addUser($username, $password, $trn_date);
		if($result){
			$userDB->createList($username);
			echo "<div class='form'>
				<h3>You are registered successfully.</h3>
				<br/>Click here to <a href='login.php'>Login</a></div>";
		}
	}
}else{ ?>
	<div class="form">
		<h1>Registration</h1>
		<form name="registration" action="" method="post">
			<input type="text" name="username" placeholder="Username" required autofocus /><br>
			<input type="password" name="password" placeholder="Password" required /><br>
			<input type="submit" name="submit" value="Register" />
		</form><br>
	</div>
<?php }
include '../view/footer.php'; ?>