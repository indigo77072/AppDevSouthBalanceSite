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

$_GET["item_id"] = 'a';
include('../database.php');
include ('../get_item_information_process.php');
echo "item_id: " . $item_id;  // worked 4/5 - expected custom error message, got one.

// testing for the else block (incl. alll database queries and the branch):









?>