<?php
session_start();

echo "Cart contents:<br><br>";
$cart_index = 0;  // the cart line item #
for (; $cart_index < count($_SESSION["cart"]); $cart_index++) {
    echo "cart line item " . $cart_index . ":<br>";
    echo "cart line item details:";
    echo "<br>";
    print_r($_SESSION["cart"][$cart_index]);
    echo "<br><br>";
}

?>
<html>
<body>

<form>

</form>
<form action="test_delete_from_cart_process.php" method="get">


<label for="quantity">Select line item to delete:</label>
    <input type="number" id="line_item_num" name="line_item_num" min="1">
    <br><br>
    <input type="submit" value="Delete from cart">




</form>

    <?php
    $line_item_num = null;
    $line_item_num = $_GET["line_item_num"];
        // echo "<a href=\"delete_from_cart_process?cart_line_item_num=" . $line_item_num . "\> delete </a>";
    if (isset($line_item_num)) {
    // if (isset($_GET["line_item_num"])) {
        header("Location: delete_from_cart_process.php?cart_line_item_num=$line_item_num");
    }

    ?>

    <!-- <a href="delete_from_cart_process?cart_line_item_num=$_GET['line_item_num']">Delete from cart</a> -->

</body>
</html>