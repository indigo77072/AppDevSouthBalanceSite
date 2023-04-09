<?php
session_start();
// Note 4/9: Will is considering removing session_start() so that it can be added to other scripts without a notice of it getting included twice.
// the alternative is to move compute_qyantiyt_... to the beginning of update_cart

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