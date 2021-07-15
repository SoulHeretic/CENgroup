<?php

 session_start();


include 'Template.php';
include 'connection.php';


if($_SESSION['loggg'] != 3)
		{
			header("location:homepage.php"); // redirects page to Review page
		}


$query = "SELECT * FROM [CPMS].[dbo].[Author]";
$query2 = "SELECT * FROM [CPMS].[dbo].[Reviewer]";
$query3 = "SELECT * FROM [CPMS].[dbo].[Review]";


$result = sqlsrv_query($conn, $query);  
echo "<table border='1'>";
while($row = sqlsrv_fetch_array($result)){ // Important line !!! Check summary get row on array ..
    echo "<tr>";
    foreach ($row as $field => $value) {
        echo "<td> </br>" . $value . "</td>"; 
    }
    echo "</tr>";
	}
	
	$query = "SELECT * FROM [CPMS].[dbo].[Author]";
	
	echo "</br>";
	echo "</br>";
	echo "</br>";
	
	echo "<h1>Author Table</h2>";



$result = sqlsrv_query($conn, $query2);  
echo "<table border='1'>";
while($row = sqlsrv_fetch_array($result)){ // Important line !!! Check summary get row on array ..
    echo "<tr>";
    foreach ($row as $field => $value) {
        echo "<td> </br>" . $value . "</td>"; 
    }
    echo "</tr>";
	}
	
	$query = "SELECT * FROM [CPMS].[dbo].[Author]";
	
	echo "</br>";
	echo "</br>";
	echo "</br>";
	
	echo "<h1>Reviewer Table</h2>";


$result = sqlsrv_query($conn, $query3);  
echo "<table border='1'>";
while($row = sqlsrv_fetch_array($result)){ // Important line !!! Check summary get row on array ..
    echo "<tr>";
    foreach ($row as $field => $value) {
        echo "<td> </br>" . $value . "</td>"; 
    }
    echo "</tr>";
	}
	
	echo "</br>";
	echo "</br>";
	echo "</br>";
	echo "<h1>Review Table</h2>";

?>