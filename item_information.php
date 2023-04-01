<!--
    SB Item Information page
    Author: Will
    Filename: item_information.php
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"></meta>
        <link rel="stylesheet" href="header_styles.css">
        <link rel="stylesheet" href="item_information_styles.css">
        <!-- <link rel="stylesheet" href="logout_styles.css"> -->
        <title>South Balance - Item Information</title>
    </head>
    <body>


    <?php
        include('database.php');
        include('get_item_information_process.php');

        // $item_name, $item_unit_price, and $product_img_path and $item_description can now be used.
    ?>
        <?php include 'header.php'; ?>


        <!-- TODO: change the below to code for item information -->
        <div id="upperSection">
        <div id="upperLeftSection">
                <img src="<?php echo $product_img_path;?>" id="water bottle" alt="Product image">
            </div><div id="upperRightSection">
                <p id="briefItemInfo"><?php echo $item_name;?> <br>
                $<?php echo $item_unit_price;?>
                </p>
                <!-- getItemName, getItemPrice -->
            </div><div id="middleSection">
                <!-- <p id="itemDescription"> -->
                <!-- Save your workday from cold coffee with the Bubba 18oz Hero Vacuum-Insulated Stainless Steel Travel Mug. Your drink stays hot up to 6 hours or cold up to 24 thanks to vacuum-insulated stainless steel, perfect in case you get stuck in a meeting and can't get back to your beverage. Sip from the leak-proof lid just by flipping up the locking flap, and snap it shut when you're finished to lock in the heat. A silicone base keeps the travel mug from sliding across your desk. When you're on the move, grab the comfortable handle and go! With the Hero Dual-Wall Vacuum-Insulated Stainless Steel Travel Mug, you're ready to get a handle on your day. Model: 2145787. -->
                <?php echo $item_description; ?>

                <!-- </p> -->

            </div><div id="lowerSection"><div id="lowerLeftSection">

                <!-- select military branch & radio options TODO: include none option -->
            <form action="add_to_cart_process.php" method="get">
                <div id="customization">
                    Select Customization<br><br>

                    <input type="radio" id="noCustomization" name="customization" value="No Customization">
                    <label for="noCustomization">No customization</label><br>

                    <input type="radio" id="patriotic" name="customization" value="Patriotic Customization">
                    <label for="patriotic">Patriotic customization</label><br>


                <input type="radio" id="army" name="customization" value="Army">
                <label for="army">Army</label><br>       
                
                <input type="radio" id="airForce" name="customization" value="Air Force">
                <label for="airForce">Air Force</label>  <br>

                <input type="radio" id="spaceForce" name="customization" value="Space Force">
                <label for="spaceForce">Space Force</label><br> 

                <input type="radio" id="navy" name="customization" value="Navy">
                <label for="navy">Navy</label>  <br>

                <input type="radio" id="marines" name="customization" value="Marines">
                <label for="marines">Marines</label>  <br>

                <input type="radio" id="coastGuard" name="customization" value="Coast Guard">
                <label for="coastGuard">Coast Guard</label>  <br>

                <input type="radio" id="armyNationalGuard" name="customization" value="Army National Guard">
                <label for="armyNationalGuard">Army National Guard</label>  

                </div>
            </div><div id="lowerRightSection">
                <!-- color chooser -->
                <!-- <input type="radio" id="blue" name="color_choice" value="Blue">
                <label for="blue">Blue</label><br>

                <input type="radio" id="black" name="color_choice" value="Black">
                <label for="black">Black</label> -->


                Select a color:
                <select name="color_choice" id="color_choice">
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                </select>



                <br>
                <label for="quantity">Select quantity:</label>
                <input type="number" id="quantity" name="testQuantity" min="1" max="100">
                <br><br>
                <input type="submit" value="Add to cart">
            </form>
            </div></div>

        
</body>

</html>
