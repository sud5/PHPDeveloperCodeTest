<?php

require_once 'config.php';
// Create connection
$conn = new mysqli($CFG->servername, $CFG->username, $CFG->password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE online_shopping";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully <br>";
} else {
  echo "Error creating database: " . $conn->error;
  exit();
}
$conn = new mysqli($CFG->servername, $CFG->username, $CFG->password, $CFG->dbname);

$sql = "CREATE TABLE opening_days (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
day VARCHAR(20) NOT NULL,
time VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table opening_days created successfully <br>";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE my_product (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
product_name VARCHAR(30) NOT NULL,
product_cost VARCHAR(30) NOT NULL,
item_left INT(10)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table my_product created successfully <br>";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
message VARCHAR(100),
contact_time VARCHAR(30)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table user created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$conn->close();
?>