<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";

$servername = "vdi-sopadb-p40";
$username = "student";
$password = "SoPAStudentDB!#!";
// $database = "south_balance_database";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  echo "Connected successfully!!!!";
}


//Reading data
$sql = "SELECT * FROM south_balance_database.accounts"; // WE ARE GETTING THE ERROR THAT THIS TABLE DOES NOT EXIST??
//$sql = "SELECT Quantity > 0 FROM inventory_items WHERE item_id = 1 "; Will's Code
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Username: " . $row["Username"]. " - Name: " . $row["First_Name"]. " " . $row["Last_Name"]. "<br>";
  }
} else {
  echo "0 results";
}

//Saving - Inserting data into the database
/*$sql2 = "INSERT INTO accounts (Username, Password, First_Name, Last_Name)
VALUES ('BBilly2', 'ItsASecret','Bob', 'Billy)";

if ($conn->query($sql2) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}*/
?>


</body>
</html>