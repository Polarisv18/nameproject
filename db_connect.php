<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "review_database"; // Use the actual name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
