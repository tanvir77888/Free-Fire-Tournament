<?php
// host: 127.0.0.1, user: root, pass: root
$conn = new mysqli("127.0.0.1", "root", "root");

if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$sql = "CREATE DATABASE IF NOT EXISTS tanvir_shop";
$conn->query($sql);
$conn->select_db("tanvir_shop");

// Import the table structures here (Users, Games, Products, etc.)
// ... (SQL code from first response)

echo "Installation Successful. <a href='index.php'>Go to Site</a>";
?>
