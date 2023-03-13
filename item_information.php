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
                <p id="briefItemInfo">Test paragraph in upper right.Test paragraph in upper right.<br>
                $39.99
                </p>
                <!-- getItemName, getItemPrice -->
            </div></div><div id="lowerSection"><div id="lowerLeftSection">
                <!-- select military branch & radio options TODO: include none option -->
                <div id="customization">radio choices for customization</div>
            </div><div id="lowerRightSection">
        
                <!-- color chooser -->
                radio choice for color 1 radio choice for color 2<br><br>
                quantity spinner
                
                <!-- quantity spinner -->
                <!-- add to cart button -->
            </div></div>

        
</body>

</html>
