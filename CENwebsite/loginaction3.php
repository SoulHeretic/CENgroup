<?php

#starts a new session
session_start();

include 'connection.php';

#catches EmailAddress/password submitted by html form
$EmailAddress = ($_POST['EmailAddress']);
$Password = ($_POST['Password']);

#searches for EmailAddress and password in the database
$query = "SELECT * FROM [CPMS].[dbo].[Admin] WHERE EmailAddress = '{$EmailAddress}' AND Password='{$Password}'";


$result = sqlsrv_query($conn, $query);  

#checks if the search was made
if($result === false){
 die( print_r( sqlsrv_errors(), true));
}
else{

#checks if the search brought some row and if it is one only row
if(sqlsrv_has_rows($result) != 1){
   echo "Email/password not found";
}else{

#creates sessions
while($row = sqlsrv_fetch_array($result)){
   $_SESSION['AdminID'] = $row['AdminID'];
   $_SESSION['FirstName'] = $row['FirstName'];
   $_SESSION['MiddleInitial'] = $row['MiddleInitial'];
   $_SESSION['LastName'] = $row['LastName'];
   $_SESSION['Affiliation'] = $row['Affiliation'];
   $_SESSION['Department'] = $row['Department'];
   $_SESSION['Address'] = $row['Address'];
   $_SESSION['City'] = $row['City'];
   $_SESSION['State'] = $row['State'];
   $_SESSION['ZipCode'] = $row['ZipCode'];
   $_SESSION['PhoneNumber'] = $row['PhoneNumber'];
   $_SESSION['EmailAddress'] = $row['EmailAddress'];
   $_SESSION['Password'] = $row['Password'];
}
   $_SESSION['log'] = 1;
   $_SESSION['logg'] = 2;
   $_SESSION['loggg'] = 3;
#redirects user
header("Location: homepage.php");
}
}
?>