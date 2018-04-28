<?php
$title = "Home Page";
$heading = "Home";
require_once "header.php";
?>

<?php if (isset($_SESSION["username"])): ?>
	<div class="welcome-msg">
		<h1>Welcome, <?php echo $_SESSION["username"]; ?></h1>
		<p>
			<a href="includes/logout.inc.php">Logout</a>
		</p>
	</div>
<?php else: ?>
	<?php
		header("Location: ./login.php");
		exit();
	?>
<?php endif ?>

<?php
	require_once "footer.php";
?>
