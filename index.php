<?php
require "index.html";
$servername = "localhost:4567";
$username = "admin";
$password = "AoezLo4VFsLk";
$dbname = "api";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected";
}

$conn->close();
?>