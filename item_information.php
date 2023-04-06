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

        // $item_name, $item_unit_price, and $product_img_path, $item_description and $item_color can now be used.
    ?>
        <?php include 'header.php'; ?>
        
        <?php
        echo "test - item_id is " . $item_id;
        ?>

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
                
                <?php echo $item_description; ?>

                <!-- </p> -->

            </div><div id="lowerSection"><div id="lowerLeftSection">

                <!-- select military branch & radio options TODO: include none option -->
            <form action="add_to_cart_process.php" method="post">

                <!-- the following is a hiden field, necessary to pass the item_id to the add_to_cart_process.php -->
                <input type="hidden" name="item_id" id="item_id" value="<?php echo $_GET['item_id'];?>" />

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
                <input type="number" id="quantity" name="quantity" min="1" max="100">
                <br><br>
                <input type="submit" value="Add to cart">
            </form>
            </div></div>

        
</body>

</html>
