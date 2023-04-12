<?php
/* This script performs logic to delete an item from the cart.
Author: Will
Date created: 4/8/23 */

// probably via POST, maybe SESSION, get the cart_line_item_number to delete.
$cart_line_item_num_to_del = null;

// loop through the cart, searching for hte desired cart_lien_item_number.

foreach ($_SESSION["cart"] as $key => $val) {
    if ($key == $cart_line_item_num_to_del) {
        unset($_SESSION["cart"][$key]);
    }
}
?>