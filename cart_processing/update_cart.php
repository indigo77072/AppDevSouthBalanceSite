<?php
/* This script performs high-level logic to update the cart contents.
Author: Will
Date created: 4/8/23 */


// include 'database.php';  // start session and connect to DB
// include 'item_id_and_color_list.php';  // includes code to get the right item_id

// Will adapted this code which Indigo wrote.
if (isset($_POST["item_id"])) {
    $item_id = $_POST["item_id"];
    echo "initial item_id: " . $item_id . " is set.";
}

include 'item_id_validation.php';

if (!is_valid_item_id($item_id)) {
    echo "App Dev custom error: not a valid item_id <br>"; 

}
// the following check should be done in create_potential_cart_line_item.php
// include 'item_id_validation.php';

// if (!is_valid_item_id($item_id)) {
//     echo "App Dev custom error: not a valid item_id <br>";
// }


include 'create_potential_cart_line_item.php';
$correct_item_id = get_item_id_from_item_color($item_id, $color_choice);  // the item id that is correct for a given color.




$potential_cart_line_item = create_potential_cart_line_item($correct_item_id);




// testing code below
// echo "details print_r for the potential cart line item:<br><br>";
// print_r($potential_cart_line_item);  // for testing
// echo "<br><br>";


// include other mid-level scripts
include 'determine_if_cart_line_item_exists.php';

$potential_cart_line_item_exists = determine_if_cart_line_item_exists($potential_cart_line_item);

$existing_cart_line_item_number = null;
if ($potential_cart_line_item_exists) {
    $existing_cart_line_item_number = get_existing_cart_line_item_number($potential_cart_line_item);
}

// Here, either 1 of 2 things are true: either 1) $potential_cart_line_item is a new itemID/customiztation combo,
// or 2) $potential_cart_line_item matches an existing cart line item, whose number is $existing_cart_line_item_number

// testing:
// if ($potential_cart_line_item_exists) {
//     echo "cart line item already exists - " . "existing_cart_line_item_number is " . $existing_cart_line_item_number;
// } else {
//     echo "cart line item is new.";
// }

include 'compute_quantity_requested.php';
$quantity_requested = compute_quantity_requested($potential_cart_line_item);



// testing:
// echo "total quantity requested: " . $quantity_requested;

// include script for high-level item 2 on my refactor sheet

include 'compute_quantity_to_order.php';
$quantity_to_order = compute_quantity_to_order($working_cart_line_item, $quantity_requested);

// given $working_cart_line_item and $quantity_to_order, update the cart variable.




?>