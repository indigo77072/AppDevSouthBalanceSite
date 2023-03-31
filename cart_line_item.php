<!-- <?php
session_start();
?> -->

<!--
    SB Cart Line Item section
    This section includes code for one line item in the list of items in the cart page.
    Author: Will
    Filename: cart_line_item.php
-->



<div class="leftColumn">
            <img src="graphics/item_placeHolder.png">
        </div>
        <div class="centerColumn"><div class="itemInfo">
        Bubba Radiant Stainless Steel Rubberized Water Bottle with Straw 32 oz.<br>
         
            <?php echo "Color: " . $_SESSION["cart"]["testColorChoice"] . "<br>"; ?>

      
            
            <?php echo "Quantity: " . $_SESSION["cart"]["testQuantity"] . "<br>"; ?>


            Price: $22.99

            <div class="deleteIconSection"><img src="graphics/trash.bmp" class="deleteIcon"></div>


        </div></div>



        