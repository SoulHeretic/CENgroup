<?php

if(!isset($_SESSION)){
 session_start();
}

$serverName = "DESKTOP-47P2A34";
$connectionInfo = array("Database" => "CPMS");
$conn = sqlsrv_connect($serverName,$connectionInfo);	//Setting up for a database connection for sql server


if($conn === false){	//Check connection to database
    echo "Error in connection.\n";
    die( print_r( sqlsrv_errors(), true));
}