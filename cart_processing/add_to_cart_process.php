<?php
/* This script performs high-level logic to add an item (which the user selected) to the cart.
Author: Will
Date created: 4/8/23 */

include '../database.php';  // start session and connect to DB

$item_from_catalog = false;

// Will edited this code which Indigo wrote.
if (isset($_POST["item_id"])) {
    $item_id = $_POST["item_id"];
    echo "initial item_id: " . $item_id . " is set.";

} else if (isset($_GET["item_id"])) {
    $item_id = $_GET["item_id"];
    echo "initial item_id: " . $item_id . " is set.";
    $item_from_catalog = true;
}

include 'item_id_validation.php';

echo "item_id here: " . $item_id;
echo "<br><br>";

if (!is_valid_item_id($item_id)) {
    echo "App Dev custom error: not a valid item_id <br>"; 

}

// set up a cart line item, with initial information
include 'create_potential_cart_line_item.php';
$correct_item_id = get_item_id_from_item_color($item_id, $color_choice);  // the item id that is correct for a given color.
$potential_cart_line_item = create_potential_cart_line_item($correct_item_id, $item_from_catalog);

// see whether there is already a cart line item with the same details as the potential one
include 'determine_if_cart_line_item_exists.php';
$potential_cart_line_item_exists = determine_if_cart_line_item_exists($potential_cart_line_item);

// if applicable, find the index of the existing cart line item
$existing_cart_line_item_index = null;
if ($potential_cart_line_item_exists) {
    $existing_cart_line_item_index = get_existing_cart_line_item_index($potential_cart_line_item);
}

// Here, either 1 of 2 things are true: either 1) $potential_cart_line_item is a new itemID/customiztation combo,
// or 2) $potential_cart_line_item matches an existing cart line item, whose number is $existing_cart_line_item_number

// processing to determine the quantity requested, and to order (of a given cart line item)
include 'compute_quantity_requested.php';
$quantity_requested = compute_quantity_requested($potential_cart_line_item);

include 'compute_quantity_to_order.php';
$quantity_to_order = compute_quantity_to_order($correct_item_id, $quantity_requested);


// update the cart array to include the new item information
include 'finalize_cart_line_item.php';

// this branch is for a cart line item that already exists
if ($potential_cart_line_item_exists) {
    include 'compute_other_line_item_quantity.php';
    $other_line_item_quantity_total
        = compute_other_line_item_quantity_total($correct_item_id, $quantity_to_order, $existing_cart_line_item_index);

    $new_quantity = $quantity_to_order - $other_line_item_quantity_total;
    
    // update the cart
    $_SESSION["cart"][$existing_cart_line_item_index]["quantity"] = $new_quantity;

// This branch is for brand-new cart line items.
} else {
    // finalize the potential cart line item
    $finalized_cart_line_item = get_final_cart_line_item($potential_cart_line_item, $quantity_to_order);

    // store teh finalized line item in the cart
    // TODO: this needs fixing
    if (!isset($_SESSION["cart"])) {
        $new_cart_item_indx = 0;
    } else {
        $new_cart_item_indx = count($_SESSION["cart"]);
    }
    $_SESSION["cart"][$new_cart_item_indx] = $finalized_cart_line_item;

}

header("Location: ../cart.php");

// echo "Cart contents:<br><br>";

// foreach ($_SESSION["cart"] as $cart_line_item_num => $cart_line_item) {
//     echo "cart line item " . $cart_line_item_num . ":<br>";
//     echo "cart line item details:";
//     echo "<br>";
//     print_r($cart_line_item);
//     echo "<br><br>";   
// }

// $cart_index = 0;  // the cart line item #
// for (; $cart_index < count($_SESSION["cart"]); $cart_index++) {
//     echo "cart line item " . $cart_index . ":<br>";
//     echo "cart line item details:";
//     echo "<br>";
//     print_r($_SESSION["cart"][$cart_index]);
//     echo "<br><br>";
// }

// echo "too many items requested: " . $_SESSION["quantity_requested_is_too_high"];

?>

<html>
<body>
    <!-- <a href="test_add_to_cart_process.php?item_id=1">Go back to the test-update-cart page</a> -->

</body>

</html>