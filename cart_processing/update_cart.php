<?php
/* This script performs high-level logic to update the cart contents.
Author: Will
Date created: 4/8/23 */


// include 'database.php';  // start session and connect to DB
// include 'item_id_and_color_list.php';  // includes code to get the right item_id

// Will adapted this code which Indigo wrote.
if (isset($_POST["item_id"])) {
    $item_id = $_POST["item_id"];
    echo "item_id: " . $item_id . " is set.";
}

// the following check should be done in create_potential_cart_line_item.php
// include 'item_id_validation.php';

// if (!is_valid_item_id($item_id)) {
//     echo "App Dev custom error: not a valid item_id <br>";
// }

include 'create_potential_cart_line_item.php';

// testing code below
echo "details print_r for the potential cart line item:<br><br>";
print_r(create_potential_cart_line_item($item_id));

// include other mid-level scripts

// $quantity_requested = get_quantity_requested($working_cart_line_item);

// include script for high-level item 2 on my refactor sheet

// $quantity_to_order = compute_quantity_to_order($working_cart_line_item, $quantity_requested);

// given $working_cart_line_item and $quantity_to_order, update the cart variable.




?>