<?php
    include 'database.php';  // start session and connect to DB
    include 'item_id_and_color_list.php';  // includes code to get the right item_id

    // Will adapted this code which Indigo wrote.
    if (isset($_POST["item_id"])) {
        $item_id = $_POST["item_id"];
    }

    if (!is_item_id_valid($item_id)) {
        echo "App Dev custom error: not a valid item_id <br>";
    } else {
        $color_choice = $_POST["color_choice"];  // the color choice the user requested for the items to add.
        $quantity_to_add = $_POST["quantity"];  // the additional quantity the user requested to add
        $customization = $_POST["customization"];  // the customization for the item(s) the user requested

        $correct_item_id = getItemIDFromItemColor($item_id, $color_choice);  // the item id that is correct for a given color.

        $curr_item_already_in_cart = false;

        // determine whether the current item is already in the cart.
        // does cart have item_id matching the current/working one?
        // -> loop through cart line items, add to a new array of cart line items that share same item id. (indexed array, with customization beign the values)

        // -> loop htrough the new arrya, & see if any line item has the same customizations.
            // if so, set the flag to true.


        // testing - storing data in teh cart manually:

        // test 1 (worked)
        // $test_id = 1;
        // $test_customization = "Patriotic Customization";
        // $test_quantity = 5;

        // $_SESSION["cart"] = array();
        // $_SESSION["cart"][1] = array("item_id"=>$test_id, "customization"=>$test_customization, "quantity"=>$test_quantity);

        // test 0 (worked)
        // $_SESSION["cart"] = array();

        // test 4 (worked)
        // $test_id_0 = 1;
        // $test_customization_0 = "Army";
        // $test_quantity_0 = 5;

        // $test_id_1 = 1;
        // $test_customization_1 = "No Customization";
        // $test_quantity_1 = 3;

        // $test_id_2 = 1;
        // $test_customization_2 = "Patriotic Customization";
        // $test_quantity_2 = 7;

        // $test_id_3 = 15;
        // $test_customization_3 = "Space Force";
        // $test_quantity_3 = 1;

        $_SESSION["cart"] = array();
        $_SESSION["cart"][0] = array("item_id"=>$test_id_0, "customization"=>$test_customization_0, "quantity"=>$test_quantity_0);
        $_SESSION["cart"][1] = array("item_id"=>$test_id_1, "customization"=>$test_customization_1, "quantity"=>$test_quantity_1);
        $_SESSION["cart"][2] = array("item_id"=>$test_id_2, "customization"=>$test_customization_2, "quantity"=>$test_quantity_2);
        $_SESSION["cart"][3] = array("item_id"=>$test_id_3, "customization"=>$test_customization_3, "quantity"=>$test_quantity_3);


        $matching_line_item_index = null; 

        for ($counter = 0; $counter < count($_SESSION["cart"]); $counter++) {

            if ($_SESSION["cart"][$counter]["item_id"] == $correct_item_id
                && $_SESSION["cart"][$counter]["customization"] == $customization) {
                    $matching_line_item_index = $counter;
                }
        }
        echo $matching_line_item_index;

        // $candidate_cart_line_items = array();  // an array holding the lcart line items which match the item_id of the current item.

        // foreach ($_SESSION["cart"] as $cart_line_item) {
        //     if ($cart_line_item["item_id"] == $correct_item_id) {
        //         array_push($candidate_cart_line_items, $cart_line_item);
        //     }
        // }
        // $matching_line_item = null;  // stores the arleady-existing cart line item.


        // foreach ($candidate_cart_line_items as $cart_line_item) {

        //     if ($cart_line_item["customization"] == $customization) {
        //         $matching_line_item = $cart_line_item;
        //         $curr_item_already_in_cart = true;
        //         break;
        //     }
        // }

        

        // increase the quantity of an item which is already in the cart.
        function increase_cart_item_quantity($cart_line_item_index, $num_items_to_add) {
            
            global $inventory_items_quantity;  // the quantity of the 
            $existing_quantity = $inventory_items_quantity;



        }

        if (isset($matching_line_item_index)) {
            // update the quantity.
            
        } else {
            // add to the cart.
        }



    }

    
    

    // $cart = $_SESSION["testCart"];  // the cart (an associative array variable)
    // $test_quantity = $cart["testQuantity"];  // the test quantity that was added to the cart

    // TODO: query maximum quantity from DB and store in a local variable.

    // $_SESSION["cart"] = null;  // --- NOTE --- commented out b/c I'm trying to add the "cart" variable to the session.

    
    // if item_id (that's currently being processed) has already been added to the cart:
    //     update that cart variable
    // else:
    //     add to the cart (such as the test below).

    


    // // $itemExistsInCart = false;
    
    // // foreach ($_SESSION["cart"] as $cartItem) {
    // //     if ($cartItem["Item_ID"] === $item_id) {   // if cart item ID equals working item_id (which this page is processing)
    // //         $itemExistsInCart = true;
    // //     }  
    // // }

    // // NOTE: we're working on the code below here:
    
    // if ($itemIDExistsInCart) {
    //     $_SESSION["cart"][""]  
    // }


    // $_SESSION["cart"]["testQuantity"] = $test_quantity;
    // $_SESSION["cart"]["testCustomization"] = $test_customization;
    // $_SESSION["cart"]["testColorChoice"] = $test_color_choice;

   // header('Location: cart.php');





?>