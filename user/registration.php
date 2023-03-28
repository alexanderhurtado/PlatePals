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
	
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number    = preg_match('@[0-9]@', $password);
	
	if (!ctype_alnum($username)) { ?>
		<p style="color:#FF0000" class="first_paragraph">Username should only contain only letters and numbers.</p>
		<?php include '../view/register_form.html'; 
	} else {
		$check = $userDB->checkUser($username);
		if ($check) { ?>
			<p style="color:#FF0000" class="first_paragraph">Username already taken. Please try again.</p>
			<?php include '../view/register_form.html';
		} else if (!$uppercase || !$lowercase || !$number || mb_strlen($password) < 8) { ?>
			<p style="color:#FF0000" class="first_paragraph">Password should be at least 8 characters
			in length and should include at least one upper-case letter and one number.</p>
			<?php include '../view/register_form.html';
		} else {
			$result = $userDB->addUser($username, $password, $trn_date);
			if($result){
				$userDB->createList($username);
				echo "<div class='form'>
					<h3>You are registered successfully.</h3>
					<br/>Click here to <a href='login.php'>Login</a></div>";
			}
		}
	}
}else{ 
	include '../view/register_form.html'; ?>
<?php } ?>
	<h4>Registration Requirements</h4>
		<p> Username cannot contain any special characters - only letters and numbers.</p>
		<p> Password must be at least 8 characters in length. </p>
		<p> Password must contain at least 1 capital letter and 1 number.</p>
<?php include '../view/footer.php'; ?>