<?php

/*

$dbServername = "studentmysql.miun.se";
$dbUsername = "baad1900";
$dbPassword = "m83npys9";
$dbname = "baad1900";
*/

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname="info";
// ansluter till databasen  
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbname);

?>