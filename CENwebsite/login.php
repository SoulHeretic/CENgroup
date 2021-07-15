<?php

//Always start with a session_start to recognize the user.
session_start();

include 'connection.php';
include 'template.php';
?>
<html>

<link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />

	<head>
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body>	<!--Account login forms -->
		<div class="Login">	<!-- Login for Author users.-->
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
		<a href="forgotpassword.php">Forgot your Author account password? Click Here.</a> <!-- Password Recovery Link.-->
	
	</br>
	</br>
		
		<div class="Login">
			<h1>Login for Reviewer Users</h1>	<!-- Login for Reviewer users.-->
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
		<a href="forgotpassword2.php">Forgot your Author account password? Click Here.</a> <!-- Password Recovery Link.-->
		
	</br>
	</br>
		
		<div class="Login">
			<h1>Login for Admin Users</h1>	<!-- Login for Admin users.-->
			<form action="loginaction3.php" method="post">
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
		<a href="forgotpassword3.php">Forgot your Author account password? Click Here.</a>	<!-- Password Recovery Link.-->
		
		</br>
		</br>

		
		<a href="register.html">Click this link to create an account!</a>

	</body>
</html>