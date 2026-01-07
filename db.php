<?php
$conn = new mysqli("localhost", "root", "", "online_court");
if ($conn->connect_error) {
    die("Database connection failed");
}
?>
