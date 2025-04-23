<?php

$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "rokomunitic";

$conn = new mysqli($servername, $username, $password, $dbname);

session_start();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
