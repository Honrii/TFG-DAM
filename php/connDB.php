<?php

$servername = "eu-cdbr-west-01.cleardb.com";//localhost
$username = "ba8f0037208220";// root
$password = "da99f8f4";//
$dbname = "heroku_83c1bab7b4bbea2";//users

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection succeeded";
}
