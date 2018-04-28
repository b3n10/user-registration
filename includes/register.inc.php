<?php

require_once "db.inc.php";

$uname = $_POST["reg_username"];
$emadd = $_POST["reg_email"];
$pword = $_POST["reg_password"];
$cpword = $_POST["reg_confirm_password"];
$error_array = array();

/*
	if empty input
		redirect with register error msg = input empty
	else
		if user is already registered
			redirect with register error msg
		else
			save to db
*/

// redirect if missing
if (empty($uname) || empty($emadd) || empty($pword) || empty($cpword)) {
	header("Location: ../register.php?reg_error=Missing Input(s)!");
} else {
	$encrypt_pword = md5($pword);
	$sql = "INSERT INTO users (username, email_address, password)
					VALUES ($uname, $emadd, $encrypt_pword);";
	mysqli_query($conn, $sql);
}
