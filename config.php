<?php
$servername = "localhost"; // Replace with your MySQL server hostname
$username = "your_username"; // Replace with your MySQL username
$password = "your_password"; // Replace with your MySQL password
$dbname = "your_database_name"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
