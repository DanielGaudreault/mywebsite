<?php
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and bind the SQL statement with parameterized query
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password); // "ss" indicates two string parameters

    if ($stmt->execute()) {
        $stmt->close();
        header("location: login.html"); // Redirect to login page after successful registration
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $conn->close();
}
?>
