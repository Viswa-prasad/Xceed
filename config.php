<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="xceed";
$port=3306;

// Creating connection
$conn = new mysqli($servername, $username, $password,$dbname,$port);

// Checking connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

?>