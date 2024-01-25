<?php
//make connection to database
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "registration";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
