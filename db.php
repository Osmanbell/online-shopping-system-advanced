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
//$con = mysqli_connect($servername, $username, $password,$db);

$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "phpserver.mysql.database.azure.com", "phpdatabs", "Password@123", "phpserver", 3306, MYSQLI_CLIENT_SSL);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
