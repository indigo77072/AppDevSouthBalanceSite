<?php
/* This script takes as input a potential cart line item. The script outputs 1) a boolean value - whether or not the cart item already exists in the cart,
and possibly 2) the existing cart line item number.
Author: Will
Date created: 4/8/23 */

// testing - storing data in teh cart manually:
// The following block is commented out b/c I coded the add-to-cart feature
        // $test_id_0 = 1;
        // $test_customization_0 = "Army";
        // $test_quantity_0 = 5;

        // $test_id_1 = 1;
        // $test_customization_1 = "No Customization";
        // $test_quantity_1 = 5;

        // $test_id_2 = 1;
        // $test_customization_2 = "Patriotic Customization";
        // $test_quantity_2 = 5;

        // $test_id_3 = 17;
        // $test_customization_3 = "Space Force";
        // $test_quantity_3 = 20;

        // $_SESSION["cart"] = array();
        // $_SESSION["cart"][0] = array("item_id"=>$test_id_0, "customization"=>$test_customization_0, "quantity"=>$test_quantity_0);
        // $_SESSION["cart"][1] = array("item_id"=>$test_id_1, "customization"=>$test_customization_1, "quantity"=>$test_quantity_1);
        // $_SESSION["cart"][2] = array("item_id"=>$test_id_2, "customization"=>$test_customization_2, "quantity"=>$test_quantity_2);
        // $_SESSION["cart"][3] = array("item_id"=>$test_id_3, "customization"=>$test_customization_3, "quantity"=>$test_quantity_3);


// Determine whether the details of an input line item match those details of an existing line item.
// we want this to return false if nothing was in the cart/new cart.
function determine_if_cart_line_item_exists($target_cart_line_item) {

    $cart_line_item_already_exists = false;

    // if (is_null($_SESSION["cart"])) {
    if (!isset($_SESSION["cart"])) {
        return false;
    }
    $working_item_id = $target_cart_line_item["item_id"];
    $working_customization = $target_cart_line_item["customization"];
    
    foreach ($_SESSION["cart"] as $cart_line_item) {  // go through the cart, looking for an existing cart line item.
        if ($cart_line_item["item_id"] == $working_item_id
            && $cart_line_item["customization"] == $working_customization) {
                    $cart_line_item_already_exists = true;
                }
    }
        // for ($counter = 0; $counter < count($_SESSION["cart"]) && !$cart_line_item_already_exists; $counter++) {

        //     if ($_SESSION["cart"][$counter]["item_id"] == $working_item_id
        //         && $_SESSION["cart"][$counter]["customization"] == $working_customization) {
        //             $cart_line_item_already_exists = true;
        //         }
        // }
    return $cart_line_item_already_exists;
}

// This input cart lien item is the one which is being updated. (it's not a totally new cart line item).
// note: Will thinks this doesn't need a !isset check for the cart vairable.
function get_existing_cart_line_item_index($cart_line_item) {

    $matching_line_item_index = null; 

    $working_item_id = $cart_line_item["item_id"];
    $working_customization = $cart_line_item["customization"];

    foreach ($_SESSION["cart"] as $cart_line_item_indx => $cart_line_item) {
        if ($cart_line_item["item_id"] == $working_item_id
            && $cart_line_item["customization"] == $working_customization) {
                $matching_line_item_index = $cart_line_item_indx;
            }
    }
    return $matching_line_item_index;

    // for ($counter = 0; $counter < count($_SESSION["cart"]); $counter++) {

    //     if ($_SESSION["cart"][$counter]["item_id"] == $working_item_id
    //         && $_SESSION["cart"][$counter]["customization"] == $working_customization) {
    //             $matching_line_item_index = $counter;
    //         }
    // }
}

?>