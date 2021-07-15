<?php
if(!isset($_SESSION)){
 session_start();
}

include 'Template.php';
include 'connection.php';
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>

	</head>
	<body class="loggedin">

		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['FirstName']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$_SESSION['Password']?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$_SESSION['EmailAddress']?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
	<div id = "footer">
<footer>
    <p>All rights reserved by </br> Consortium for Computing Sciences in Colleges Midwest </br>(CCSCMW)</p>
</footer>
</html>
