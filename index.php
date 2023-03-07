<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";

$servername = "localhost";
$username = "student";
$password = "SoPAStudentDB!#!";
$database = "south_balance_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully!!!!";

//Reading data
$sql = "SELECT * FROM accounts";
//$sql = "SELECT Quantity > 0 FROM inventory_items WHERE item_id = 1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Username: " . $row["Username"]. " - Name: " . $row["Firstname"]. " " . $row["Lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

//Saving - Inserting data into the database
/*$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/
?>


</body>
</html>