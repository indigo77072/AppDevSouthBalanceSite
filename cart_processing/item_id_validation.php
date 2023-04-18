<?php
/* This script includes logic to validate and revise item_id's.
Author: Will
Date created: 4/8/23 */

// an array of all the possible item id's
// sub-arrays: index 0 is a blue item, index 1 a green one.
$item_id_and_color_array = array (
    array(1, 25),
    array(2, 19),
    array(3, 21),
    array(5, 6),
    array(8, 20),
    array(9, 18),
    array(10, 27),
    array(11, 24),
    array(12, 23),
    array(13, 26),
    array(17, 15)
);

// determien if an inputted id is possible
function is_valid_item_id($item_id) {
    global $item_id_and_color_array;

    foreach ($item_id_and_color_array as $item_pair) {
        if ($item_pair[0] == $item_id || $item_pair[1] == $item_id) {
            return true;
        }
    }
    return false;

}

/* Take as input an item id and specified color w/ capital 1st letter. output the item id which determines the desired item. */
function get_item_id_from_item_color($input_item_id, $color) {

    if (!is_valid_item_id($input_item_id)) {
        echo "App Dev Error: " . $input_item_id . " is not a valid product item_id <br>";
    } else {
        global $item_id_and_color_array;

        $item_id_found = false;  // flag
        $indxItemPair = 0;  // counter to loop through the outer array within $item_id_and_color_array

        // go through the array, until the input_item_id is found.
        for (; ($indxItemPair < count($item_id_and_color_array)) && !$item_id_found; $indxItemPair++) {

            if ($item_id_and_color_array[$indxItemPair][0] == $input_item_id
                || $item_id_and_color_array[$indxItemPair][1] == $input_item_id) {
                    $item_id_found = true;
            }
        }
        $indxItemPair--;

        $blue_item_id = $item_id_and_color_array[$indxItemPair][0];
        $green_item_id = $item_id_and_color_array[$indxItemPair][1];
        if ($color === "blue") {
            return $blue_item_id;
        }
        return $green_item_id;
    }   
}

?>
