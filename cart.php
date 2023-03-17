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
    
        <div id="leftColumn">
            <img src="graphics/item_placeHolder.png">
        </div>
        <div id="centerColumn"><div id="itemInfo">
        Bubba Radiant Stainless Steel Rubberized Water Bottle with Straw 32 oz.<br>
            Color: Blue<br>
            Quantity: 1<br>
            Price: $22.99

            <div id="deleteIconSection"><img src="graphics/trash.bmp" id="deleteIcon"></div>


        </div></div>
        <div id="rightColumn">
        <form id="shippingConfig" action="/place_order_page.php">
            <p id="shippingConfigTitle">Select shipping method:
            </p><div id="shippingConfig">

            <input type="radio" id="usps" name="shipping_choice" value="USPS (3-5 days) Standard cost">
                <label for="usps">USPS (3-5 days) Standard cost</label><br>

                <input type="radio" id="fedex" name="shipping_choice" value="FedEx (2 days)">
                <label for="fedex">FedEx (2 days)</label><br>
            
                <input type="radio" id="express" name="shipping_choice" value="Express (6-24 hrs.)">
                <label for="express">Express (6-24 hrs.)</label></div>
                <div id="proceedToCheckoutDiv"><input type="submit" value="Proceed to checkout"></div>
            </form>
            </div>
        </div>
        
        
<!-- 
        <div id="bodyContainer">
        <div id="leftColumn">
        <img src="graphics/sb_logo.png" id="productImg" alt="Product Image">
        </div>
        <div id="centerColumn">
            <div id="cartItemInfo">
            test
            </div>
        
            
    
</div>
<div id="rightColumn">
<p>test </p>
</div>
</div> -->

        
</body>

</html>
