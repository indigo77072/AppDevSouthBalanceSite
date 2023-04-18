<?php
/* This script accesses and returns various information related to a cart line item.
Author: Will
Date created: 4/13/23 */

function get_item_name($line_item_indx) {
    // get the color from the DB - ideally using a stored procedure or function.
    return "placeholder item name";
}

function get_item_color($line_item_indx) {
    // get the color from the DB - ideally using a stored procedure or function.
    return "placeholder item color";
}

function get_item_quantity($line_item_indx) {
    return $_SESSION["cart"][$line_item_indx]["quantity"];
}

function get_item_price($line_item_indx) {
    // compute price
    return 0.0;  // placeholder price
}

?>