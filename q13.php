<?php
$conn = new mysqli("localhost", "root", "", "testdb", 3307);

if ($conn->connect_error) {
    die("Database connection failed");
}

$username = $_GET['username'] ?? '';

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Username available in database";
} else {
    echo "Username not found";
}
