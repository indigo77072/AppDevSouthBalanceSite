<!DOCTYPE html>
<html>

<head>
        <meta charset="UTF-8"></meta>
        <link rel="stylesheet" href="header_styles.css">
        <link rel="stylesheet" href="index_styles.css">
        <title>South Balance - Home</title>
</head>
<body>

<?php include 'header.php' ?>

<?php

$servername = "vdi-sopadb-p40";
$username = "student";
$password = "SoPAStudentDB!#!";
// $database = "south_balance_database";

// Create connection
$conn = new mysqli($servername, $username, $password);
?>

  <div id="searchBar">
    <input type="text" id="search" placeholder="Search">
</div>
<div id="bodyText"><p>Radically Conscious. Obsessively Chill. Fanatically Zen.</p><br>
<p class="bodyContent">Here at South Balance, we do “slowing down” differently. What started as a New Orleans-based mom-and-pop
  retail operation has bloomed into one of the most popular and innovative suppliers of premium yoga mats
  and merchandise in the United States and across the world. Recently named this year’s fastest growing company
  by CIO magazine, we’re working hard to bring you the products and experience you expect and deserve. So go ahead; 
  browse our site, explore our products, and picture yourself #fanaticallyzen.</p>
</div>



<!--
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }else{
//   echo "Connected successfully!!!!";
// }


// //Reading data
// $sql = "SELECT * FROM south_balance_database.accounts"; // WE ARE GETTING THE ERROR THAT THIS TABLE DOES NOT EXIST??
// //$sql = "SELECT Quantity > 0 FROM inventory_items WHERE item_id = 1 "; Will's Code
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "Username: " . $row["Username"]. " - Name: " . $row["First_Name"]. " " . $row["Last_Name"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }

// //Saving - Inserting data into the database
// /*$sql2 = "INSERT INTO accounts (Username, Password, First_Name, Last_Name)
// VALUES ('BBilly2', 'ItsASecret','Bob', 'Billy)";

// if ($conn->query($sql2) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql2 . "<br>" . $conn->error;
// }*/
// -->


</body>
</html>