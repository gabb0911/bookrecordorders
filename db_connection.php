<?php
// Database configuration
$host = 'localhost';     // Database host
$username = 'your_username';  // Database username
$password = 'your_password';  // Database password
$database = 'mcpi_ordering_system';  // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
