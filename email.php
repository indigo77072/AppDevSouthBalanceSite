<?php 
include("database.php");
// Retrieve the newest row from the orders table
//$sql = "SELECT Customer_ID, Sales_Person_ID, Center_ID, Order_Total_Amount FROM orders ORDER BY Order_ID DESC LIMIT 1";
//$result = $conn->query($sql);

// Retrieve the newest row from the orders table
$sql = "SELECT o.Order_Total_Amount, c.Facility_Name, a.First_Name FROM orders o
        JOIN distribustion_centers c ON o.Center_ID = c.Center_ID
        JOIN accounts a ON o.Sales_Person_ID = a.Sales_Person_ID
        ORDER BY o.Order_ID DESC LIMIT 1";
$result = $conn->query($sql);

// Check if there are any rows in the result set
if ($result->num_rows > 0) {
    // Get the data from the row
    $row = $result->fetch_assoc();

    // Start the HTML document
    echo '<!DOCTYPE html>
        <html>
        <head>
            <title>Newest Order Information</title>
        </head>
        <body>';

    // Display the order information
    echo "<h1>Order Invoice</h1>";
    echo '<p>Facility Name: ' . $row['Facility_Name'] . '</p>';
    echo '<p>Sales Person First Name: ' . $row['First_Name'] . '</p>';
    echo '<p>Order Total Amount: $' . $row['Order_Total_Amount'] . '</p>';
    echo '<a href="https://SecurePayments/' . $row['Facility_Name'] .  '">Please utilize our secure portal to submit your payment so that you order can be processed</a> <br>';

    // Add a "Print" button that triggers the print dialog
    echo '<button onclick="window.print()">Print</button>';

    // End the HTML document
    echo '</body>
        </html>';
}else{
    echo "bad code";
}
// Close the database connection
$conn->close(); ?>