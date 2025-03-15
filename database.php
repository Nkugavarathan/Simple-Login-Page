<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpmysql";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection) {
    echo "db connected successfully";
} else {
    die("Error" . $connection->connect_error);
}

// table name login