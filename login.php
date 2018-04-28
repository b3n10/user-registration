<?php
$title = "User Login";
$heading = "Login";
require_once "header.php";

if (isset($_SESSION["username"])) {
	header("Location: ./");
	exit();
}
?>
<div class="reg-error-msg">
	<?php if (isset($_GET["reg_error"])): ?>
		<p><?php echo $_GET["reg_error"]; ?></p>
	<?php endif ?>
</div>
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
