<?php
/* Created by Will 4/6 */

// // testing passing in a parameter in the URL. Should work b/c I get that datum with GET.
// header('Location: ../item_information.php?item_id=1');
// // worked 4/6

// // testing passing in a bad parameter in the URL. should result in a custom error msg.
// header('Location: ../item_information.php?item_id=A');
// // worked 4/6

// // testing manually setting the GET variable, then loading the page.
// $_GET["item_id"] = 1;
// header('Location: ../item_information.php');
// // this generated errors - good to know

// testing manually setting the POST variable, then loading the page.
$_POST["item_id"] = 1;
header('Location: ../item_information.php');
// this generated errors - good to know

?>