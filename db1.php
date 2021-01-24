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

// Creating database
$sql = "CREATE DATABASE XCEED";
if ($conn->query($sql) !== TRUE) {
  echo "Error creating database: " . $conn->error;
  $conn->close();
}
$conn->select_db("xceed");

//Creating tables
$query = file_get_contents ('queries.sql');

if ($conn->multi_query($query) !== TRUE) {
    echo "Error creating tables: " . $conn->error;
    $conn->close();
}
$conn->close();


?>