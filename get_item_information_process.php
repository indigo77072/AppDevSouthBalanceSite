<?php

        $item_id = $_GET["item_id"];  // get the item_id (from what the user clicked on)
        
        $item_name_query = "SELECT Item_Name FROM inventory_items WHERE Item_ID = $item_id";
        $item_name_result = mysqli_query($conn, $item_name_query);
        $row = $item_name_result -> fetch_assoc();
        $item_name = $row["Item_Name"];

        $item_unit_price_query = "SELECT Item_Unit_Price FROM inventory_items WHERE Item_ID = $item_id";
        $item_unit_price_result = mysqli_query($conn, $item_unit_price_query);
        $row = $item_unit_price_result -> fetch_assoc();
        $item_unit_price = $row["Item_Unit_Price"];

        $type_of_item_query = "SELECT Type_of_Item FROM inventory_items WHERE Item_ID = $item_id";
        $type_of_item_result = mysqli_query($conn, $type_of_item_query);
        $row = $type_of_item_result -> fetch_assoc();
        $type_of_item = $row["Type_of_Item"];
        
        $item_description_query = "SELECT Item_Description FROM inventory_items WHERE Item_ID = $item_id";
        $item_description_result = mysqli_query($conn, $item_description_query);
        $row = $item_description_result -> fetch_assoc();
        $item_description = $row["Item_Description"];

        $product_img_path = null;
        if ($type_of_item == "Yoga mat" || $type_of_item == "Yoga mat Kit") {
            $product_img_path = "product_images/yoga_mat.png";
        } else {
            $product_img_path = "product_images/water_bottle.png";
        }
    
        
?>