<?php include 'view/header.php'; ?>
<h2>Enter Username and Password</h2> 
	<form action="" method = "post">
		<input type="hidden" name="action" value="in" >
		<input type="text" name="username" placeholder="Username" required autofocus><br>
		<input type="password" name="password" placeholder="Password" required><br>
		<label>&nbsp;</label>
		<button type="submit">Login</button>
	</form>
<?php include 'view/footer.php'; ?>