<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>User Registration</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
</head>
<body>
	<div class="header">
		<h1>Register</h1>
	</div>
	<div class="user-input">
		<form action="includes/register.php" method="POST">
			<input type="text" name="reg_username" placeholder="Username">
			<input type="text" name="reg_email" placeholder="Email address">
			<input type="password" name="reg_password" placeholder="Password">
			<input type="password" name="reg_confirm_password" placeholder="Confirm Password">
			<button type="submit" name="submit">Submit</button>
		</form>
	</div>
</body>
</html>
