<?php
// Configuration
$host = 'localhost';
$db_user = 'root'; // Changed from $name to $db_user for clarity
$db_password = '';
$db_name = 'registration_db';

// Create connection
$conn = new mysqli($host, $db_user, $db_password, $db_name);

// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>