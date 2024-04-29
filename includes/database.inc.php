<?php

// Development Connection
// Server name or IP Address
$host = "roundhouse.proxy.rlwy.net";

// MySQL Username
$user = "root";

// MySQL Password
$pass = "pzOkYUboNOcgdOuVjqiFXbssuLZiEZsq";

// Default Database name
$db = "railway";

// Creating a connection to the DataBase
#$conn = new mysqli($host, $user, $pass, $db);  
$con = mysqli_connect($host,$user,$pass,$db,27857);

/* Deployment Connection

$host = "SERVER_URL";
$user = "USERNAME";
$pass = "PASSWORD";
$db = "DATABASE_NAME";
$port = 'PORT_NO';

$con = mysqli_connect($host, $user, $pass, $db, $port);
*/

// Checking If the connection is obtained
if (!$con) {
  die("Database Connection Error");
}