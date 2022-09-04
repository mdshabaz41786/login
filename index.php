<?php
include("dblogin.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="form.css">
	<title>PHP FORM</title>
</head>
<body>

<div class="container">
	<form action="#" method="POST">
	<div class="title">
		<h1>Login Form</h1>
	</div>

	<div class="form">
		<div class="input_type">
			<label>User Id</label>
			<input type="text" name="fname">
		</div>
		<div class="input_type">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input_type">
			<input type="submit" value="Register" class="btn" name="register">
		</div>
	</div>
</form>
</div>

</body>
</html>

<?php

if($_POST["register"])
{

	$Firstname = $_POST['fname'];
	$Lastname = $_POST['password'];

	$query = "INSERT INTO userdata values('$Firstname','$Lastname')";

	$executing = mysqli_query($conn,$query);

	if($executing) {
		echo "login Success";
	}
	else {
		echo "login failed";
	}

}

?>