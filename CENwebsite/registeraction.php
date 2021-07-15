<?php

#starts a new session. This is a author registration form.
session_start();

include 'connection.php';

#catches EmailAddress/password submitted by html form
$EmailAddress = ($_POST['EmailAddress']);
$Password = ($_POST['Password']);
$FirstName = ($_POST['FirstName']);
$MiddleInitial = ($_POST['MiddleInitial']);
$LastName= ($_POST['LastName']);
$Affiliation = ($_POST['Affiliation']);
$Department = ($_POST['Department']);
$Address = ($_POST['Address']);
$City = ($_POST['City']);
$State = ($_POST['State']);
$ZipCode = ($_POST['ZipCode']);
$PhoneNumber = ($_POST['PhoneNumber']);
$EmailAddress = ($_POST['EmailAddress']);
$Password = ($_POST['Password']);

#searches for EmailAddress and password in the database
$query = ("Insert INTO [CPMS].[dbo].[Author] (FirstName,MiddleInitial,LastName,Affiliation,Department,Address,City,State,ZipCode,PhoneNumber,EmailAddress,Password)Values
('{$FirstName}','{$MiddleInitial}','{$LastName}','{$Affiliation}','{$Department}','{$Address}','{$City}','{$State}','{$ZipCode}','{$PhoneNumber}','{$EmailAddress}','{$Password}')");

//$params = array(($FirstName,$MiddleInitial,$LastName,$Affiliation,$Department,$Address,$City,$State,$ZipCode,$PhoneNumber,$EmailAddress,$Password));

$result = sqlsrv_query($conn,$query);


#checks if the search was made
if($result === false){
 die( print_r( sqlsrv_errors(), true));
}
else{
	echo "Registration Successful";	//Replace with redirect and pop up later.
}
?>