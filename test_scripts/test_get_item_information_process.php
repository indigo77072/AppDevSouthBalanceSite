<?php

// header("Location: ../get_item_information_process.php");  // worked 4/5/23 pm - expected error, got error

// header("Location: ../get_item_information_process.php?item_id=0");  // sort of worked 4/5 - expected error, got >1 errors

// include('../database.php');
// include ('../get_item_information_process.php?item_id=1');  // failed 4/5 pm

// $_GET["item_id"] = 5;
// include('../database.php');
// include ('../get_item_information_process.php');  // worked 4/5 - got a blank page.

// $_GET["item_id"] = 5;
// include('../database.php');
// include ('../get_item_information_process.php');
// echo "item_id: " . $item_id;  // worked 4/5 - this printed item_id: 5.  ALso, the url stayed at the path + title of this document, the URL didn't "redirect/be editted" to the get_item_informaiton_process

// $_GET["item_id"] = 'a';
// include('../database.php');
// include ('../get_item_information_process.php');
// echo "item_id: " . $item_id;  // worked 4/5 - expected custom error message, got one.

// testing for the else block (incl. alll database queries and the branch):
// $_GET["item_id"] = '1';
// include('../database.php');
// include ('../get_item_information_process.php');
// echo "Item_Name: " . $item_name . "<br>";
// echo "Item_Unit_Price: " . $item_unit_price . "<br>";
// echo "Type_of_Item: " . $type_of_item . "<br>";
// echo "Item_Description: " . $item_description . "<br>";
// echo "product image path: " . $product_img_path . "<br>";
// echo "Item_Color: " . $item_color;
// // the above worked, 4/6 - it shouwed alll the proper data.

// $_GET["item_id"] = '15';
// include('../database.php');
// include ('../get_item_information_process.php');
// echo "Item_Name: " . $item_name . "<br>";
// echo "Item_Unit_Price: " . $item_unit_price . "<br>";
// echo "Type_of_Item: " . $type_of_item . "<br>";
// echo "Item_Description: " . $item_description . "<br>";
// echo "product image path: " . $product_img_path . "<br>";
// echo "Item_Color: " . $item_color;
// // the above works 4/6


$_GET["item_id"] = '2';
include('../database.php');
include ('../get_item_information_process.php');
echo "Item_Name: " . $item_name . "<br>";
echo "Item_Unit_Price: " . $item_unit_price . "<br>";
echo "Type_of_Item: " . $type_of_item . "<br>";
echo "Item_Description: " . $item_description . "<br>";
echo "product image path: " . $product_img_path . "<br>";
echo "Item_Color: " . $item_color;
// the above works 4/6










?>