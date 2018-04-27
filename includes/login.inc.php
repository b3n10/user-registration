<?php

if (isset($_POST["submit"])) {
	$username = $_POST["reg_username"];
	$password = $_POST["reg_password"];
} else {
	header("Location: ../index.php");
	exit();
}
