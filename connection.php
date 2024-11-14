<?php
// Ensure session is only started once
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database connection
$conn = new mysqli("localhost","root","","lbms");  // Adjust database credentials accordingly

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
