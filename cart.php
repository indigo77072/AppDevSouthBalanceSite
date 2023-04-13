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

        <?php
        
        include "cart_processing/render_cart_content.php";
        
        $num_cart_items = 0;
        if (isset($_SESSION["cart"])) {
            $num_cart_items = count($_SESSION["cart"]);
        }

        if ($num_cart_items > 0) {
            display_topmost_cart_info();
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
