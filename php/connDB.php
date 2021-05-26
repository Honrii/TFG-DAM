<?php

$servername = "localhost";
$username = "ba8f0037208220";// root
$password = "da99f8f4";//da99f8f4
$dbname = "heroku_83c1bab7b4bbea2";//heroku_83c1bab7b4bbea2

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection succeeded";
}
