<?php
session_start();

if (isset($_SESSION["username"])) {
	// show login info
} else {
	header("Location: ./register.php");
	exit();
}
