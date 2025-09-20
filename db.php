<?php
$servername = "localhost";
$username = "root";  // Default in XAMPP
$password = "";      // Leave empty for XAMPP
$dbname = "userregistration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
