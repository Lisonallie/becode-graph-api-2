<?php
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

$first = $_POST['firstname'];
$last = $_POST['lastname'];
$user = $_POST['username'];
$pass = $_POST['password'];
$textbox = $_POST['textbox'];

$sql = "INSERT INTO user (firstname, lastname, username, password, textbox) VALUES ('$first', '$last', '$user', '$pass', '$textbox')";

if(mysqli_query($conn, $sql)) {
    echo 'Inserted.';
} else {
    echo 'Not Inserted.';
}

header("refresh:2; url=index.html");

?>