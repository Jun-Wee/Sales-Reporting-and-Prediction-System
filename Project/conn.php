<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "phpsreps";

// Create connection
$conn = new mysqli($servername, $username, $password);

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS $database");

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>