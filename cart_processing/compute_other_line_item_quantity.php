<?php
/* This script includes a function which takes as input a) the new quantity to order, b) the existing cart line item number, and c) the relevant item_id.
It adds up the quantities for those line items that a) match the relevant item_id, and b) are not equal to the existing line item.
Author: Will
Date created: 4/11/23 */

function compute_other_line_item_quantity_total($item_id, $quantity_to_order, $existing_cart_line_item_indx) {

    $count = 0;  // the count of preexisting quantity requested

    foreach ($_SESSION["cart"] as $cart_line_item_indx => $cart_line_item) {
        if ($cart_line_item["item_id"] == $item_id
            && $cart_line_item_indx != $existing_cart_line_item_indx) {
            $count += $cart_line_item["quantity"];
        }
    }


    // $cart_index = 0;  // the cart line item #
    // for (; $cart_index < count($_SESSION["cart"]); $cart_index++) {
        
    //     $cart_line_item = $_SESSION["cart"][$cart_index];
        
    //     if ($cart_line_item["item_id"] == $item_id
    //         && $cart_index != $existing_cart_line_item_number) {
    //         $count += $cart_line_item["quantity"];
    //     }
    // }
    return $count;
}
