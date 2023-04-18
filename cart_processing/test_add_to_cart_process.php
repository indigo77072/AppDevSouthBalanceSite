<html>

<body>
<!-- This script is for testing add_to_cart_process.php.
Author: Will
Date created: 4/8/23 -->

<!-- <form action="update_cart.php" method="post"> -->
<form action="add_to_cart_process.php" method="post">

                
                <!-- the following is a hidden field, necessary to pass the item_id to the add_to_cart_process.php -->
                <input type="hidden" name="item_id" id="item_id" value="<?php echo $_GET['item_id'];?>" />

                <!-- the following is a hidden field, necessary to pass the action mode to the add_to_cart_process.php -->
                <!-- <input type="hidden" name="action" id="action" value="<?php echo $_POST['action'];?>" /> -->

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
                <input type="number" id="quantity" name="quantity" min="1">
                <br><br>
                <input type="submit" value="Add to cart">
            </form>


</body>
</html>
