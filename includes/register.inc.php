<?php

require_once "db.inc.php";

$uname = htmlspecialchars($_POST["reg_username"]);
$emadd = htmlspecialchars($_POST["reg_email"]);
$pword = htmlspecialchars($_POST["reg_password"]);
$cpword = htmlspecialchars($_POST["reg_confirm_password"]);

// redirect if missing
if (empty($uname) || empty($emadd) || empty($pword) || empty($cpword)) {
	header("Location: ../register.php?reg_error=Missing Input(s)!");
} else if ($pword != $cpword) {
	header("Location: ../register.php?reg_error=Passwords mismatch!");
}	else {
	// query if username/email is on record
	$sql = "SELECT * FROM users WHERE username='$uname' OR email_address='$emadd'";
	$result = mysqli_query($conn, $sql);

	// if username is already on record
	if (mysqli_num_rows($result) >= 1) {
		header("Location: ../register.php?reg_error=Username/E-mail Address Already Taken!");
		exit();
	// if available
	} else {
		$encrypt_pword = md5($pword);
		$sql = "INSERT INTO users (username, email_address, password)
			VALUES ('$uname', '$emadd', '$encrypt_pword')";
		$result = mysqli_query($conn, $sql);
		$_SESSION["username"] = $uname;
		header("Location: ../register.php?reg_success=Record Saved!");
	}
}
