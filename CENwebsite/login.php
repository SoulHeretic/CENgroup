<?php

//Always start with a session_start to recognize the user.
if(!isset($_SESSION)){
 session_start();
}
include 'connection.php';
?>
<html>

<link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />

	<head>
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body>
		<div class="Login">
			<h1>Login for Author Users</h1>
			<form action="loginaction.php" method="post">
				<label for="EmailAddress">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="EmailAddress" placeholder="EmailAddress" id="EmailAddress" required>
				<label for="Password">
					<i class="fas fa-lock"></i> <!--This creates an icon*-->
				</label>
				<input type="Password" name="Password" placeholder="Password" id="Password" required>
				<input type="submit" value="Login">
			</form>
		</div>
	
	</br>
	</br>
		
		<div class="Login">
			<h1>Login for Reviewer Users</h1>
			<form action="loginaction2.php" method="post">
				<label for="EmailAddress">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="EmailAddress" placeholder="EmailAddress" id="EmailAddress" required>
				<label for="Password">
					<i class="fas fa-lock"></i> <!--This creates an icon*-->
				</label>
				<input type="Password" name="Password" placeholder="Password" id="Password" required>
				<input type="submit" value="Login">
			</form>
		</div>
		
		<a href="register.html">Click this link to create an account!</a>

	</body>
</html>