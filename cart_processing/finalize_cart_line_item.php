<?php
/* This script includes a fncn which returns a finalized cart line item (for a new line item).
Author: Will
Date created: 4/10/23 */

include 'compute_quantity_requested.php';

// copy by value/reference might be especially important for this fncn
// 4/10, 6:06pm: Trying this with pass-by-value ("default")
function get_final_cart_line_item($potential_cart_line_item, $quantity_to_order) {

    $general_item_id = $potential_cart_line_item["Item_ID"];  // the general id of the item, regardless of customizations.
    $prev_quantity = count_preexisting_quantity_requested($general_item_id);  // the preexisting quantity requested (of the items, regardless of their customizations)
    $quantity_line_item = $quantity_to_order - $prev_quantity;

    $result_item = $potential_cart_line_item;
    $result_item["Quantity"] = $quantity_line_item;
    return $result_item;
}