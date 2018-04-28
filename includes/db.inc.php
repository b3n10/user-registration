<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "jairah";
$db_name = "user_registration";

if (isset($_POST["submit"])) {
	$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
} else {
	header("Location: ../index.php?error=page not allowed");
	exit();
}
