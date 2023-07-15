<?php

//$servername = "localhost";
//$username = "root";
//$password = "";
//$db = "onlineshop";

$servername= getenv('phpserver.mysql.database.azure.com');
$username = getenv('phpdatabs');
$password =getenv('Password@123');
$db = getenv('onlineshop');


 // Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
