<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header("Location: login.html");
    exit;
}
?>
<h2>Welcome to Online Court System</h2>
<a href="viewcase.php">View My Cases</a><br>
<a href="judgment_orders.html">Judgment & Orders</a><br>
<a href="about.html">About</a><br>
<a href="logout.php">Logout</a>
