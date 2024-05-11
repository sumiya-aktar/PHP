<?php
// Assuming your database credentials
$servername = "localhost";
$username = "root";
$password = " "; 

// Create connection
$conn = new mysqli($servername, $username, $password, 'exam');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close connection
$conn->close();
?>
