<?php
/* This script computes the quantity to order for a given item. This is independent of any customizations.
Author: Will
Date created: 4/9/23 */

// Will is testing not including database.php, so it can be included at top of update_cart.
// include '../database.php';

$_SESSION["quantity_requested_is_too_high"] = false;

// get the quantity available from teh database for an input item_id
function get_quantity_from_db($item_id) {
    global $conn;
    $item_quantity_query = "SELECT Quantity FROM inventory_items WHERE Item_ID = $item_id";
    $quantity_result = mysqli_query($conn, $item_quantity_query);
    $row = $quantity_result -> fetch_assoc();
    return $row["Quantity"];
}

// calculate the quantity to order, based on the app requirements in South Balance module
function compute_quantity_to_order($item_id, $quantity_requested) {
    // here, item_id should be a valid item_id.

    $quantity_available = get_quantity_from_db($item_id);
    if ($quantity_requested <= $quantity_available) {
        return $quantity_requested;
    } else {
        $_SESSION["quantity_requested_is_too_high"] = true;
        return $quantity_available;
    }


}
?>