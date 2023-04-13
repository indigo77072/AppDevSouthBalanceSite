<?php
/* This script performs logic to delete an item from the cart.
Author: Will
Date created: 4/8/23 */
session_start();

// get the cart_line_item_number to delete.
if (isset($_GET["cart_line_item_num"])) {
    $cart_line_item_num_to_del = $_GET["cart_line_item_num"];
    echo "cart_line_item_num_to_del: " . $cart_line_item_num_to_del . " is set.";
}

// loop through the cart, searching for hte desired cart_lien_item_number, then delete it.
foreach ($_SESSION["cart"] as $key => $val) {
    if ($key == $cart_line_item_num_to_del) {
        unset($_SESSION["cart"][$key]);
    }
}

// display updated cart line items.
echo "Cart contents:<br><br>";
foreach ($_SESSION["cart"] as $line_item_num => $cart_line_item) {
    echo "cart line item " . $line_item_num . ":<br>";
    echo "cart line item details:";
    echo "<br>";
    print_r($cart_line_item);
    echo "<br><br>";
}


?>