<?php
/* This script performs logic to display cart items in cart.php
Author: Will
Date created: 4/13/23 */

include 'get_cart_line_items_info.php';

// display details for a cart lien item, given by its inputted index.
function display_cart_line_item($line_item_indx) {
    echo "<div class=\"leftColumn\">
    <img src=\"graphics/item_placeHolder.png\">
    </div>
    <div class=\"centerColumn\"><div class=\"itemInfo\">"

    . get_item_name($line_item_indx) . "<br>"
    . "Color: " . get_item_color($line_item_indx) . "<br>"
    . "Quantity: " . get_item_quantity($line_item_indx) . "<br>"
    . "Price: " . get_item_price($line_item_indx)
    
    . "<div class=\"deleteIconSection\"><br><br>
    <a href=\"cart_processing/delete_from_cart_process.php?cart_line_item_num=$line_item_indx\">
        <img src=\"graphics/trash.bmp\" class=\"deleteIcon\"></div>
        </a>
    </div></div>";
    
}

// display the box to place the order.
function display_place_order_box() {
    echo "<div class=\"rightColumn\">
        <form class=\"shippingConfig\" action=\"/place_order_page.php\">
            <p class=\"shippingConfigTitle\">Select shipping method:
            </p><div class=\"shippingConfig\">

            <input type=\"radio\" class=\"usps\" name=\"shipping_choice\" value=\"USPS (3-5 days) Standard cost\">
                <label for=\"usps\">USPS (3-5 days) Standard cost</label><br>

                <input type=\"radio\" class=\"fedex\" name=\"shipping_choice\" value=\"FedEx (2 days)\">
                <label for=\"fedex\">FedEx (2 days)</label><br>
            
                <input type=\"radio\" class=\"express\" name=\"shipping_choice\" value=\"Express (6-24 hrs.)\">
                <label for=\"express\">Express (6-24 hrs.)</label></div>
                <div class=\"proceedToCheckoutDiv\"><input type=\"submit\" value=\"Proceed to checkout\"></div>
            </form>
            </div>";
}

// Display the first cart line item info (on the left) and the place-order box (on the right).
function display_topmost_cart_content() {
    echo "<div class=\"flex-container\">";
    display_first_cart_line_item(get_first_line_item_indx());

    display_place_order_box();
    echo "</div>";    
}

// helper function to get the first lien item's index.
function get_first_line_item_indx() {
    foreach ($_SESSION["cart"] as $line_item_indx => $val) {
        return $line_item_indx;
    }
}

// dispaly the first cart line item
function display_first_cart_line_item($first_line_item_indx) {

    display_cart_line_item($first_line_item_indx);
}

// display the 2nd and further cart line items, as well as formatting code.
function display_additional_cart_line_items() {

    echo "<hr class=\"itemDivider\">";
    echo "<div class=\"flex-container\">";

    $first_line_item_indx = get_first_line_item_indx();

    foreach ($_SESSION["cart"] as $line_item_indx => $cart_line_item) {
        if ($line_item_indx != $first_line_item_indx) {
            display_cart_line_item($line_item_indx);
        }
    }
    include 'cart_line_item_spacing.php';
    echo "</div>"; 

}
    
?>