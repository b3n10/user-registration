<?php

require_once "db.inc.php";

$uname_email = htmlspecialchars($_POST["reg_username"]);
$pword = htmlspecialchars($_POST["reg_password"]);

if (empty($uname_email) || empty($pword)) {
	header("Location: ../login.php?reg_error=Missing Input(s)!");
}	else {
	$encrypt_pword = md5($pword);
	$sql = "SELECT * FROM users WHERE password='$encrypt_pword' AND (username='$uname_email' OR email_address='$uname_email')";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) >= 1) {
		if (isset($_SESSION["username"])) {
			unset($_SESSION["username"]);
			session_destroy();
			$_SESSION["username"] = $uname_email;
			header("Location: ../");
			exit();
		}
		session_start();
		$_SESSION["username"] = $uname_email;
		header("Location: ../");
		exit();
	} else {
		header("Location: ../login.php?reg_error=Login Error!");
		exit();
	}
}
