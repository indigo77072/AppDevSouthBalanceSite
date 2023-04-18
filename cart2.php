<?php 
include("database.php");
include 'header.php';
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
case "add":
	if(!empty($_POST["quantity"])) {
		$query = "SELECT * FROM inventory_items WHERE Item_ID='" . $_GET["Item_ID"] . "'";
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

<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["Item_Unit_Price"];
		?>
				<tr>
				<td><img src="<?php echo $item['Image'] ?>" class="img-box" alt="..." style="width:150px; height:150px"><?php echo $item["Item_Name"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item['Item_Unit_Price']; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="cart2.php?action=remove&Item_ID=<?php echo $item["Item_ID"]; ?>" class="btnRemoveAction"><img src="x.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["Item_Unit_Price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
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