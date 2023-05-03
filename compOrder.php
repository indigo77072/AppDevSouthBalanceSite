<?php 
include("database.php");
//include 'header.php';
//if(!empty($_GET["submit"])) {

	//$Item_ID = $_GET["Item_ID"];
    $quantity = $_GET['totQuantity'];
$sales_person_id = $_SESSION["id"]; 
$center_id = $_GET['Location']; 
$order_total_amount = $_GET["totPrice"];
$status = "Invoice Submitted"; 
$customer_id =$center_id;
//echo $quantity;
//echo $sales_person_id;
//echo $center_id;
//echo $order_total_amount;
//echo $status;


// Close statement and connection

$insert = "INSERT INTO orders (Customer_ID, Sales_Person_ID, Center_ID, Order_Total_Amount, Status) 
VALUES ($customer_id, $sales_person_id, $center_id, $order_total_amount, '$status' )";

if ($conn->query($insert) === TRUE) {
  echo "New record created successfully";
  header("location:email.php?");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$insert->close();
	
//}
?>