<?php
$servername = "localhost";  // replace with your MySQL server name
$username = "root";      // replace with your MySQL username
$password = "password";      // replace with your MySQL password
$dbname = "kopidb";          // replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";

// Now you can perform database operations using $conn

// Close connection
// $conn->close();
?>
