<?php
	$title = "User Login";
	$heading = "Login";
	require_once "header.php";
?>
	<div class="user-input">
		<form action="includes/login.inc.php" method="POST">
			<input type="text" name="reg_username" placeholder="Username/E-mail Address">
			<input type="password" name="reg_password" placeholder="Password">
			<button type="submit" name="submit">Submit</button>
			<p>
				New member? <a href="register.php">Register</a>
			</p>
		</form>
	</div>
<?php
	require_once "footer.php";
?>
