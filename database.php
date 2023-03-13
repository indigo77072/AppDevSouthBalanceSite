<?php
session_start();
$servername = "vdi-sopadb-p40";
$username = "student";
$password = "SoPAStudentDB!#!";
$db ="south_balance_database";
// $database = "south_balance_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 
?>