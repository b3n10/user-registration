<?php
	$title = "User Registration";
	$heading = "Register";
	require_once "header.php";
?>
	<div class="user-input">
		<form action="includes/register.inc.php" method="POST">
			<input type="text" name="reg_username" placeholder="Username">
			<input type="text" name="reg_email" placeholder="Email address">
			<input type="password" name="reg_password" placeholder="Password">
			<input type="password" name="reg_confirm_password" placeholder="Confirm Password">
			<button type="submit" name="submit">Submit</button>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
	</div>
<?php
	require_once "footer.php";
?>
