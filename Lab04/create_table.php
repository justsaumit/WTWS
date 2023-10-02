<?php
$servername = "db";
$username = "example";
$password = "example";
$database = "regformdata";
$tableName = "regtable";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select the database
$conn->select_db($database);

// Create table
$sql = "CREATE TABLE `$tableName` (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fname VARCHAR(50) NOT NULL,
  lname VARCHAR(50) NOT NULL,
  gender VARCHAR(10),
  phone VARCHAR(15),
  email VARCHAR(100),
  city VARCHAR(50),
  department VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating Table: " . $conn->error;
}

$conn->close();
?>