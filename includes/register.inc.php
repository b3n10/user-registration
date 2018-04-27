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

function display_errors($err) {
	$errors = "";
	$count_err = 0;
	foreach ($err as $a) {
		$count_err++;
		$comma = ($count_err > 1) ? ", " : "";
		$errors = $errors . $comma . $a;
	}
	return $errors;
}

if (empty($uname)) { array_push($error_array, "Username"); }
if (empty($emadd)) { array_push($error_array, "E-mail Address"); }
if (empty($pword)) { array_push($error_array, "Password"); }
if (empty($cpword)) { array_push($error_array, "Confirm Password"); }
// redirect if missing
if (count($error_array)) { header("Location: ../register.php?reg_error=Missing: " . display_errors($error_array) . ""); }
