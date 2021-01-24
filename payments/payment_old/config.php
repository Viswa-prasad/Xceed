<?php
$servername = "localhost";
$username = "root";
$password = "";

// Creating connection
$conn = new mysqli($servername, $username, $password);

// Checking connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$conn->select_db("xceed");

?>