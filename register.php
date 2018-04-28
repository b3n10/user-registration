<?php
	$title = "User Registration";
	$heading = "Register";
	require_once "header.php";
?>
<div class="reg-error-msg">
	<?php if (isset($_GET["reg_error"])): ?>
		<p><?php echo $_GET["reg_error"]; ?></p>
	<?php endif ?>
</div>
<div class="reg-success-msg">
	<?php if (isset($_GET["reg_success"])): ?>
		<p><?php echo $_GET["reg_success"]; ?></p>
	<?php endif ?>
</div>
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
