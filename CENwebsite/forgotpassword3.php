<?php
session_start();

include 'connection.php';
include 'template.php';

if(isset($_POST['submit']))
{
    $EmailAddress = ($_POST['EmailAddress']);
	$query = "SELECT * FROM [CPMS].[dbo].[Admin] WHERE EmailAddress = '{$EmailAddress}'";
    $result = sqlsrv_query($conn,$query);
	if( $result == false) {
    die( print_r( sqlsrv_errors(), true) );
}
    while($row = sqlsrv_fetch_array($result)){
	$EmailAddress=$row['EmailAddress'];
	$Password=$row['Password'];
	}

	if($EmailAddress==$EmailAddress) {
				$to = $EmailAddress;
                $subject = "Password";
                $txt = "Your password is : $Password.";
                $headers = "From: password@CCSCMW.com" . "\r\n" .
                "CC: example@example.com";
                mail($to,$subject,$txt,$headers);
				echo 'Email Sent.';
			}
				else{
					echo 'Invalid Email';
				}
}
?>
<html>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email Address:</td><td><input type='text' name='EmailAddress'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>


