<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpmysql";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection) {
    echo "db connected successfully";
} else {
    echo "Error" . $connection->connect_error;
}
