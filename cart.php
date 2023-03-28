<?php
session_start();
?>

<!--
    SB Cart page
    Author: Will
    Filename: cart.php
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"></meta>
        <link rel="stylesheet" href="header_styles.css">
        <link rel="stylesheet" href="cart_styles.css">
        <!-- <link rel="stylesheet" href="logout_styles.css"> -->
        <title>South Balance - Shopping Cart</title>
    </head>
    <body>

        <?php include 'header.php'; ?>
        <div class="flex-container">
    
        <div class="leftColumn">
            <img src="graphics/item_placeHolder.png">
        </div>
        <div class="centerColumn"><div class="itemInfo">
        Bubba Radiant Stainless Steel Rubberized Water Bottle with Straw 32 oz.<br>
            <!-- Color: Blue<br>  -->
            <?php echo "Color: " . $_SESSION["cart"]["testColorChoice"] . "<br>"; ?>

            <!-- Quantity: 1<br>  -->
            <!-- <?php echo "Quantity: " . $_GET["cart"]["testQuantity"] . "<br>"; ?> -->
            <!-- <?php echo "Quantity: " . $_POST["cart"]["testQuantity"] . "<br>"; ?> -->
            <?php echo "Quantity: " . $_SESSION["cart"]["testQuantity"] . "<br>"; ?>


            Price: $22.99

            <div class="deleteIconSection"><img src="graphics/trash.bmp" class="deleteIcon"></div>


        </div></div>
        <div class="rightColumn">
        <form class="shippingConfig" action="/place_order_page.php">
            <p class="shippingConfigTitle">Select shipping method:
            </p><div class="shippingConfig">

            <input type="radio" class="usps" name="shipping_choice" value="USPS (3-5 days) Standard cost">
                <label for="usps">USPS (3-5 days) Standard cost</label><br>

                <input type="radio" class="fedex" name="shipping_choice" value="FedEx (2 days)">
                <label for="fedex">FedEx (2 days)</label><br>
            
                <input type="radio" class="express" name="shipping_choice" value="Express (6-24 hrs.)">
                <label for="express">Express (6-24 hrs.)</label></div>
                <div class="proceedToCheckoutDiv"><input type="submit" value="Proceed to checkout"></div>
            </form>
            </div>
        </div>

        <hr class="itemDivider">
        <!------------------ separation between 1st and 2nd cart items ------------->

        <div class="flex-container">
    
        <div class="leftColumn">
            <img src="graphics/item_placeHolder.png">
        </div>
        <div class="centerColumn"><div class="itemInfo">
        Bubba Hero Mug<br>
            Color: Black<br>
            Quantity: 1<br>
            Price: $17.99

            <div class="deleteIconSection"><img src="graphics/trash.bmp" class="deleteIcon"></div>


        </div></div>
        <div class="additionalItemRightColumn">
        <form class="shippingConfig" action="/place_order_page.php">
            <p class="shippingConfigTitle"><!--Select shipping method:-->
            </p><div class="shippingConfig">

            <!--<input type="radio" class="usps" name="shipping_choice" value="USPS (3-5 days) Standard cost">-->
                <label for="usps"><!--USPS (3-5 days) Standard cost--></label><br>

                <!--<input type="radio" class="fedex" name="shipping_choice" value="FedEx (2 days)">-->
                <label for="fedex"><!--FedEx (2 days)--></label><br>
            
                <!--<input type="radio" class="express" name="shipping_choice" value="Express (6-24 hrs.)">-->
                <label for="express"><!--Express (6-24 hrs.)--></label></div>
                <div class="proceedToCheckoutDiv"><!--<input type="submit" value="Proceed to checkout">--></div>
            </form>
            </div>
        </div>
        
        
<!-- 
        <div class="bodyContainer">
        <div class="leftColumn">
        <img src="graphics/sb_logo.png" class="productImg" alt="Product Image">
        </div>
        <div class="centerColumn">
            <div class="cartItemInfo">
            test
            </div>
        
            
    
</div>
<div class="rightColumn">
<p>test </p>
</div>
</div> -->

        
</body>

</html>
