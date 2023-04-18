<?php
/* 
====================================================
NOT IN USE as of 4/12 afternoon.
=====================================================


This script performs logic to update the cart contents (via either add or delete).
Author: Will
Date created: 4/12/23 */

// probably via POST, take as input the mode of update (either add or delete).
$update_mode = $_POST['action'];  // next try session access, which was set in test_update-cart.php

if (is_null($update_mode)) {
    echo "update mode evals to null.";
}

if ($update_mode == null) {
    echo "update mode with weaker comparisoin evals to null";
}

$_SESSION["new_item_info_from_user"] = array();

echo "in update_cart.php - update_mode is: " . $update_mode;
echo "<br><br>";
echo "details for update mode:<br><br>";
// print_r($update_mode);
var_dump($update_mode);
echo "<br><br>";

if ($update_mode == "add") {
    $_SESSION["new_item_info_from_user"]["item_id"] = $_POST["item_id"];
    $_SESSION["new_item_info_from_user"]["color_choice"] = $_POST["color_choice"];
    $_SESSION["new_item_info_from_user"]["quantity"] = $_POST["quantity"];
    $_SESSION["new_item_info_from_user"]["customization"] = $_POST["customization"];

    echo "in update mode = add branch <br><br>";

    echo "sessino - new_item_info_from_user details:<br><br>";
    print_r($_SESSION["new_item_info_from_user"]);

    header('Location: add_to_cart_process.php');

} else if ($update_mode == "delete") {
    $_SESSION["cart_line_item_num"] = $_POST["cart_line_item_num"];  // the cart line item number to delete
    header('Location: delete_from_cart_process.php');

} else {
    echo "App Dev custom error message: action must be equal to either \"add\" or \"delete\".";
}

