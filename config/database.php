<?php
$host = "localhost"; // Change to your database host
$user = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "majisa_web_services"; // Change to your database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
