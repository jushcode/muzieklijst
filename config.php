<?php
$servername = "localhost";
$databasename = "database";
$username = "user";
$password = "password"; //'I do not recommend this password.'

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>
