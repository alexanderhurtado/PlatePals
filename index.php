<?php include 'view/header.php'; ?>
<body>
	<div>
	<?php
		if (isset($_SESSION["username"])) { 
			header("Location: dashboard"); 
		} else { 
			header("Location: user/login.php");
		}
	?>
	</div>
</body>
<?php include 'view/footer.php'; ?>