<?php
/* This script takes as input item details from what the user specified. The script outputs a potential cart line item.
Author: Will
Date created: 4/8/23 */

    // // this block is only for testing. in production, this will be set in a script which calls create_potential_cart_line_item(item_id).
    // // Will adapted this code which Indigo wrote.
    // if (isset($_POST["item_id"])) {
    //     $item_id = $_POST["item_id"];
    //     echo "item_id: " . $item_id;
    // }

// moving to update_cart.php
// include 'item_id_validation.php';

// if (!is_valid_item_id($item_id)) {
//     echo "App Dev custom error: not a valid item_id <br>";
// }

// get the item order details from POST
$color_choice = $_POST["color_choice"];  // the color choice the user requested for the items to add.
$inputted_quantity = $_POST["quantity"];  // the additional quantity the user requested to add
$customization = $_POST["customization"];  // the customization for the item(s) the user requested

// $color_choice = $_SESSION["new_item_info_from_user"]["color_choice"];  // the color choice the user requested for the items to add.
// $inputted_quantity = $_SESSION["new_item_info_from_user"]["quantity"];  // the additional quantity the user requested to add
// $customization = $_SESSION["new_item_info_from_user"]["customization"];  // the customization for the item(s) the user requested

// moving to update_cart.php
// $correct_item_id = get_item_id_from_item_color($item_id, $color_choice);  // the item id that is correct for a given color.

// set up a cart line item with an inputted quantity. $item_from_catalog is a flag, Will is leaving this detail to be worked out later.
function create_potential_cart_line_item($correct_item_id, $item_from_catalog) {
    
    global $customization;
    global $inputted_quantity;
    
    if ($item_from_catalog) {
        $customization = "No Customization";
    }
    $potential_cart_line_item = array("item_id"=>$correct_item_id, "customization"=>$customization, "quantity"=>$inputted_quantity);

    return $potential_cart_line_item;
}
?>