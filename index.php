<?php
$servername = "localhost";
$username = "admin";
$password = "AoezLo4VFsLk";
$dbname = "api";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//declare table variables
$first = $_POST['firstname'];
$last = $_POST['lastname'];
$user = $_POST['username'];
$pass = $_POST['password'];
$textbox = $_POST['textbox'];

//insert new info into user table on submit
$sql = "INSERT INTO user (Firstname, Lastname, Username, Password, Textbox) VALUES ('$first','$last','$user','$pass','$textbox')";

// $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
// $stmt->bind_param("sssss", $firstname, $lastname, $user, $pass, $textbox);

// // set parameters and execute
// $firstname = "John";
// $lastname = "Doe";
// $email = "john@example.com";
// $stmt->execute();

if(mysqli_query($conn, $sql)) {
    echo 'Inserted.';
} else {
    echo 'Not Inserted.';
}

header("refresh:2; url=index.html");

?>