<?php 
include("database.php");
include 'header.php';
if(!empty($_GET["action"])) {

	// NOTE: if we are deleting one line item, we don't want to delete all line items with the same id.
	$working_item_id = $_GET["Item_ID"];
	/*echo "working_item_id: " . $working_item_id;
	echo "<br><br>";*/

switch($_GET["action"]) {
case "add":

	//echo "in add section";

	if(!empty($_POST["quantity"])) {

		$query = "SELECT * FROM inventory_items WHERE Item_ID='" . $working_item_id . "'";
        $result=mysqli_query($conn,$query);
        $row= mysqli_fetch_assoc($result);

		$itemArray = array($row["Item_ID"]=>array('Item_Name'=>$row['Item_Name'], 'Item_ID'=>$row["Item_ID"], 'Item_Unit_Price'=>$row["Item_Unit_Price"], 'quantity'=>$_POST["quantity"], 'Image'=>$row['Image']));
		//echo $row['Item_Unit_Price'];
		if(!empty($_SESSION["cart_item"])){

			if(in_array($row["Item_ID"],array_keys($_SESSION["cart_item"]))) {
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
    break; 
	case "remove":

		echo "in remove code section";
		echo "<br><br>";

		// code the delete code here
		// NOTE - I'm testing iterating through the entire Session to  see if I was referring toi content within the cart item rather than accessing just the cart item.
		foreach ($_SESSION as $cart_line_item_key => $cart_line_item_val) {
			echo "detials for variable cart_line_item_val:";
			echo "<br>";
			echo "<br>";
			print_r($cart_line_item_val);
			echo "<br>";
			echo "<br>";

			if ($_SESSION[$cart_line_item_key]["Item_ID"] == $working_item_id) {

			// if ($cart_line_item["Item_ID"] == $working_item_id) {
				echo "working_item_id:";
				echo $working_item_id;
				echo "<br>";
				echo "<br>";
				// $_SESSION[$cart_line_item] = null;
				unset($_SESSION[$cart_line_item_key]);
			}
		}

		// re-build the cart-item variable
		// TODO: try this next

		break;   
}
}
?>
<html>
<head>
<title>Shopping Cart</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<!--<link rel="stylesheet" href="header_styles.css">-->
</head>
<BODY>
<div id="shopping-cart">

<!--<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>-->
<?php

// THEORY: the next line is evaluating to false, thereby skipping the construction of hte table w/ new cart info.

// THEORY: since the cart items are stored directly in $_SESSION, it is difficult to refer to them.
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<form action ="compOrder.php?submit='Yes'" method="GET">
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Total Price</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["Item_Unit_Price"];
		?>
				<tr>
				<td><img src="<?php echo $item['Image'] ?>" class="img-box" alt="..." style="width:150px; height:150px"><?php echo $item["Item_Name"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; $quantity = $item['quantity']?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item['Item_Unit_Price']; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<!-- <td style="text-align:center;"><a href="cart2.php?action=remove&Item_ID=<?php //echo $item["Item_ID"]; ?>" class="btnRemoveAction"><img src="" alt="Remove Item" /></a></td> -->
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["Item_Unit_Price"]*$item["quantity"]);
		}
		?>

<tr>
<td align="right" colspan="2"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
<tr>
	<td align="right" colspan="2">
		<select name="Location">
			<?php 
			$sql2 = mysqli_query($conn, "SELECT * FROM distribustion_centers");
			while ($rowD = $sql2->fetch_assoc()){
			echo "<option value=" . $rowD['Center_ID']. ">" . $rowD['Facility_Name'] . "</option>";
			}
			?>
			
		</select>
	</td>
</tr>
<tr>
	
	<input type="hidden" name="totQuantity" value="<?php echo $total_quantity; ?>">
		<input type="hidden" name="totPrice" value="<?php echo $total_price; ?>">
	<td align="right" colspan="2"> <input type="submit" name="comOrder" value="Complte Order"></td>
</tr>
<tr>
	<td>
	

	</td>
</tr>
</tbody>
</table>	
</form>	
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>
</body>
</html>