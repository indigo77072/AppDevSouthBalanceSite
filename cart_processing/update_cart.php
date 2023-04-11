<?php
/* This script performs high-level logic to update the cart contents.
Author: Will
Date created: 4/8/23 */


include '../database.php';  // start session and connect to DB
// include 'item_id_and_color_list.php';  // includes code to get the right item_id

// Will edited this code which Indigo wrote.
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

// initialize the cart if nothing has been added yet


// $_SESSION["cart"] = null;


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
$quantity_to_order = compute_quantity_to_order($correct_item_id, $quantity_requested);

///test
// echo "Cart contents:<br><br>";
// $cart_index = 0;  // the cart line item #
// for (; $cart_index < count($_SESSION["cart"]); $cart_index++) {
//     echo "cart line item " . $cart_index . ":<br>";
//     print_r($_SESSION["cart"][$cart_index]);
//     echo "<br><br>";
// }

// echo "correct_item_id: " . $correct_item_id;
// echo "<br>";
// echo "quantity_to order: " . $quantity_to_order;
// echo "<br>";
// echo "<br>";

// given $potential_cart_line_item and $quantity_to_order, update the cart variable.




include 'finalize_cart_line_item.php';



if ($potential_cart_line_item_exists) {

    echo "in potential cart line item exists. <br><br>";
    
    $prev_quantity = count_preexisting_quantity_requested($correct_item_id);
    $quantity_line_item = $quantity_to_order - $prev_quantity;

    

    echo "quant. to order: " . $quantity_to_order . "<br>";
    echo "prev quant.: " . $prev_quantity . "<br>";
    echo "new quant. of line item: " . $quantity_line_item . "<br>";

    
    echo "existing_cart_line_item_number: " . $existing_cart_line_item_number . "<br>";
    echo "count(Session): <br>";
    echo count($_SESSION["cart"]);

    // update the cart
    $_SESSION["cart"][$existing_cart_line_item_number]["quantity"] = $quantity_line_item;

} else {

    echo "in the else block - brand new cart item is being worked on <br><br>";
    // finalize the potential cart line item
    $finalized_cart_line_item = get_final_cart_line_item($potential_cart_line_item, $quantity_to_order);


    // testing - worked 4/10 6:32pm
    // echo "the new, finalized cart line item:<br><br>";
    // print_r($finalized_cart_line_item);

    // store teh finalized line item in the cart
    if (!isset($_SESSION["cart"])) {
        $new_cart_item_number = 0;
    } else {
        $new_cart_item_number = count($_SESSION["cart"]) + 1;
    }
    $_SESSION["cart"][$new_cart_item_number] = $finalized_cart_line_item;

}


// testing 4/10 pm: trying adding to cart various times, including item combos I already added before.

// needs logic error debugging.

echo "Session count fncn: <br>";
echo count($_SESSION["cart"]);
echo "<br>";
echo "<br>";

echo "Cart contents:<br><br>";
$cart_index = 0;  // the cart line item #
for (; $cart_index < count($_SESSION["cart"]); $cart_index++) {
    echo "cart line item " . $cart_index . ":<br>";
    print_r($_SESSION["cart"][$cart_index]);
    echo "<br><br>";
}

?>

<html>
<body>
    <a href="test_update_cart.php?item_id=1">Go back to the test-update-cart page</a>

</body>

</html>