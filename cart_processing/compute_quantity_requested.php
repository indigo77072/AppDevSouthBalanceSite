<?php
/* This script computes the quantity requested of a given cart item. This is computed differently based on whether the cart item is new or existing in the cart.
Author: Will
Date created: 4/8/23 */

// count the total of the item_id already in the cart.
function count_preexisting_quantity_requested($correct_item_id) {

    $count = 0;  // the count of preexisting quantity requested
    $cart_index = 0;  // the cart line item #
    for (; $cart_index < count($_SESSION["cart"]); $cart_index++) {

        $cart_line_item = $_SESSION["cart"][$cart_index];
        if ($cart_line_item["item_id"] == $correct_item_id) {        
            $count += $cart_line_item["quantity"];
        }
    }
    return $count;
}

// return a total number requested of the item.
function compute_quantity_requested($potential_cart_line_item) {

    $item_id = $potential_cart_line_item["item_id"];  // the item id to total the quantity requested of
    $prev_quantity = count_preexisting_quantity_requested($item_id);  // the preexisting quantity requested (of the items, regardless of their customizations)
    $new_num_requested = $potential_cart_line_item["quantity"];  // the new count of the item that is requested

    if ($prev_quantity == 0) {
        return $new_num_requested;
    } else {
        return $prev_quantity + $new_num_requested;
    }
}