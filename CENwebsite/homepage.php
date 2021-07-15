<?php

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
/*if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
*/

include 'Template.php';
include 'connection.php';
?>

<html>
<head>
<title>Homepage</title>
</head>
<body>
<p>
<h1>Homepage</h1>
"Welcome. The purpose of this website is to speedily process the submission of papers, as well as speed up the process of reviews."
</p>
</body>
<div id = "footer">
<footer>
    <p>All rights reserved by </br> Consortium for Computing Sciences in Colleges Midwest </br>(CCSCMW)</p>
</footer>
</div">
</html>
<!-- Original layout is thanks to Michiel Wouters -->