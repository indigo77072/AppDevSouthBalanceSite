<?php
/* This script computes the quantity requested of a given cart item. This is computed differently based on whether the cart item is new or existing in the cart.
Author: Will
Date created: 4/8/23 */

function tally_preexisting_quantity_requested($correct_item_id) {

}

function get_existing_cart_item($existing_cart_line_item_number) {

}

// $preexisting_cart_line_item is either null (for a brand new cart line item scenario) or not null (for the scenario where it should be updated)
function compute_quantity_requested($preexisting_cart_line_item, $potential_cart_line_item) {
    if (!isset($preexisting_cart_line_item)) {
        $quantity_requested = $potential_cart_line_item["quantity"];
    } else {  // in this case, the working carrt line item is existing in the cart, already.
        $preexisting_quantity = $preexisting_cart_line_item["quantity"];
        $additional_quantity = $potential_cart_line_item["quantity"];
        $quantity_requested = $preexisting_quantity + $additional_quantity;
    }
    return $quantity_requested;
    
}