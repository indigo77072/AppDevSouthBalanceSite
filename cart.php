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

        <?php

            // TODO: tend to this
            // $specificColor1 = $_SESSION["cart"]["testColorChoice"];
            // $specificQuantity1 = $_SESSION["cart"]["testQuantity"];
        ?>                                                           

        <?php include 'header.php'; ?>
        <!-- <div class="flex-container"> -->
        
        <div class="pageTitle">
        <h2>Shopping Cart</h2>
        </div>
        
        <?php
        
        include "cart_processing/render_cart_content.php";
        
        // get the num of cart items
        $num_cart_items = 0;
        if (isset($_SESSION["cart"])) {
            $num_cart_items = count($_SESSION["cart"]);
        }
        
        // deal w/ too high quantity requested
        if ($_SESSION["quantity_requested_is_too_high"] && $num_cart_items > 0) {
            echo "<div class=\"topOfPageNotifications\"><strong>You selected a quantity that is higher than what we have in stock.
            The quantity listed below is the entire quantity available.</strong></div><br><br>";
        }
        
        // display any existing cart line items
        if ($num_cart_items == 0) {
            echo "<div class=\"topOfPageNotifications\"><strong>There are no items in the cart.</strong></div>";
        }
        if ($num_cart_items > 0) {
            display_topmost_cart_content();
        }
        if ($num_cart_items > 1) {
            display_additional_cart_line_items();
        }
        

        
        ?>


    
        





        <!-- <php include 'cart_line_item.php'; ?>




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
        </div> -->

        <!-- <hr class="itemDivider">
        ---------------- separation between 1st and 2nd cart items ------------->

        
        <!-- <div class="flex-container"> -->
    
        
        <!-- <php include 'cart_line_item.php'; ?>

        <php include 'cart_line_item_spacing.php'; ?> -->
        



<!-- </div>


        <hr class="itemDivider">

        <div class="flex-container">


        <php include 'cart_line_item.php'; ?>
        <php include 'cart_line_item_spacing.php'; ?>


        </div>



        <hr class="itemDivider">

        <div class="flex-container">


        <php include 'cart_line_item.php'; ?>
        <php include 'cart_line_item_spacing.php'; ?>


        </div>



        <hr class="itemDivider">

        <div class="flex-container">


        <php include 'cart_line_item.php'; ?>
        <php include 'cart_line_item_spacing.php'; ?>


        </div> -->
        <!-- </div> -->
        
        
        
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
