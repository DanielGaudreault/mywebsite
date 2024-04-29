<?php
$servername = "localhost"; // Replace 'localhost' with your MySQL server hostname
$username = "root"; // Replace 'root' with your MySQL username
$password = ""; // Replace '' with your MySQL password
$dbname = "your_database_name"; // Replace 'your_database_name' with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>
