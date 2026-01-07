<?php
$host = "localhost";
$username = "root"; // or your DB username
$password = "";     // or your DB password
$database = "legal_connect"; // use your actual DB name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Basic validation
    if (!preg_match("/^[A-Za-z ]{3,50}$/", $name)) {
        die("Invalid name format.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    if (strlen($message) < 10) {
        die("Message must be at least 10 characters.");
    }

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "Message received. We’ll get back to you soon.";
    } else {
        echo "Something went wrong. Please try again.";
    }

    $stmt->close();
}

$conn->close();
?>
