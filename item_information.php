<!--
    SB Item Information page
    Author: Will
    Filename: logout.php
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

        <?php include 'header.php'; ?>


        <!-- TODO: change the below to code for item information -->
        <div id="upperSection">
        <div id="upperLeftSection">
                <img src="graphics/sb_logo.png" id="product" alt="Item image placeholder">
            </div><div id="upperRightSection">
                <p id="briefItemInfo">Bubba 40 oz. Radiant Stainless Steel Rubberized Water Bottle<br>
                $25.99
                </p>
                <!-- getItemName, getItemPrice -->
            </div></div><div id="lowerSection"><div id="lowerLeftSection">

                <!-- select military branch & radio options TODO: include none option -->
            <form action="/add_to_cart_page.php">
                <div id="customization">
                    Select Military Branch<br>

                    <input type="radio" id="noCustomization" name="customization" value="No Customization">
                    <label for="noCustomization">No customization</label><br>

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
                <input type="radio" id="blue" name="color_choice" value="Blue">
                <label for="blue">Blue</label><br>

                <input type="radio" id="black" name="color_choice" value="Black">
                <label for="black">Black</label>
                <br>
                <label for="quantity">Select quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="5">
                <br>
                <input type="submit" value="Add to cart">
            </form>
            </div></div>

        
</body>

</html>
