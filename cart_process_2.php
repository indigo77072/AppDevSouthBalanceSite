<?php 
include("database.php");
case "add":
	if(!empty($_POST["quantity"])) {
		$query = "SELECT * FROM inventory_items WHERE Item_ID='" . $_GET["Item_ID"] . "'";
        $result=mysqli_query($conn,$query);
        $row= mysqli_fetch_assoc($result);
		$itemArray = array($row["Item_ID"]=>array('Item_Name'=>$row['Item_Name'], 'Item_ID'=>$row["Item_ID"], 'quantity'=>$_POST["quantity"], echo $row['Item_Unit_Price']; , 'image'=>'graphics/item_placeHolder.png');
		
		if(!empty($_SESSION["cart_item"])) {
			if(in_array$row["Item_ID"],array_keys($_SESSION["cart_item"]))) {
				foreach($_SESSION["cart_item"] as $k => $v) {
						if($row["Item_ID"] == $k) {
							if(empty($_SESSION["cart_item"][$k]["quantity"])) {
								$_SESSION["cart_item"][$k]["quantity"] = 0;
							}
							$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
						}
				}
			} else {
				$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
            }
        }else {
			$_SESSION["cart_item"] = $itemArray;
            }
    }
	break; ?>