<?php
// Include the database configuration file
require_once('config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL statement to insert the new user
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $hashed_password);

    if ($stmt->execute()) {
        // Registration successful, redirect to login page
        header("location: login.php");
        exit();
    } else {
        // Error occurred during registration
        echo "Error: " . $stmt->error;
    }

    // Close the database connection and statement
    $stmt->close();
    $conn->close();
}
?>
