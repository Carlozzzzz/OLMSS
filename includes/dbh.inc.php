<?php
//connection variables
$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "olms2";

// database connection
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

//Error handler
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}