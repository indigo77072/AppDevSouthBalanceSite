<?php

    $item_id = $_GET["item_id"];  // get the item_id (from what the user clicked on)

    // TODO: hard-code an array of the valid item id numbers, and check for membership in that array.
    if (!is_numeric($item_id)) {
        echo "AppDev Error: The provided item_id is not a valid item number.";
    } else {
        $item_name_query = "SELECT Item_Name FROM inventory_items WHERE Item_ID = $item_id";
        $item_name_result = mysqli_query($conn, $item_name_query);
        $row = $item_name_result -> fetch_assoc();
        $inventory_items_item_name = $row["Item_Name"];

        $item_unit_price_query = "SELECT Item_Unit_Price FROM inventory_items WHERE Item_ID = $item_id";
        $item_unit_price_result = mysqli_query($conn, $item_unit_price_query);
        $row = $item_unit_price_result -> fetch_assoc();
        $inventory_items_item_unit_price = $row["Item_Unit_Price"];

        $type_of_item_query = "SELECT Type_of_Item FROM inventory_items WHERE Item_ID = $item_id";
        $type_of_item_result = mysqli_query($conn, $type_of_item_query);
        $row = $type_of_item_result -> fetch_assoc();
        $inventory_items_type_of_item = $row["Type_of_Item"];
        
        $item_description_query = "SELECT Item_Description FROM inventory_items WHERE Item_ID = $item_id";
        $item_description_result = mysqli_query($conn, $item_description_query);
        $row = $item_description_result -> fetch_assoc();
        $inventory_items_item_description = $row["Item_Description"];

        $item_color_query = "SELECT Item_Color FROM inventory_items WHERE Item_ID = $item_id";
        $item_color_result = mysqli_query($conn, $item_color_query);
        $row = $item_color_result -> fetch_assoc();
        $inventory_items_item_color = $row["Item_Color"];

        $quantity_query = "SELECT Quantity FROM inventory_items WHERE Item_ID = $item_id";
        $quantity_result = mysqli_query($conn, $item_color_query);
        $row = $quantity_result -> fetch_assoc();
        $inventory_items_quantity = $row["Item_Color"];

        // item size is stored in DB; it's not accessed in this script (yet).

        $product_img_path = null;
        if ($inventory_items_type_of_item == "Yoga mat" || $inventory_items_type_of_item == "Yoga mat Kit") {
            $product_img_path = "product_images/yoga_mat.png";
        } else {
            $product_img_path = "product_images/water_bottle.png";
        }
}

        
    
        
?>