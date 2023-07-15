<?php

//$servername = "localhost";
//$username = "root";
//$password = "";
//$db = "onlineshop";

getenv(servername) = 'phpserver.mysql.database.azure.com';
getenv(username) = 'phpdatabs';
getenv(password) = 'Password@123';
getenv(db_name) = 'onlineshop';


 // Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
