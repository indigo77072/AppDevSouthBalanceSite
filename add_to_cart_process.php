<?php
    include 'database.php';  // start session and connect to DB

    if(isset($_GET["add"])){
        $item_id=$_GET["add"];
      echo $item_id;
    }

    $color_choice = $_GET["color_choice"];

    // TODO: check / verify the following and potentially code with functions;

    // if ( getColorChoice from DB for htis item id !== color choice)
    // then refresh the page, with the proper item id for the color choice.

    // e.g., item id is 5, color chocie is Green
    // get color choice from DB is Blue !== Green is True
    // thus refresh the page w/ item_id 6.

    $quantity = $_GET["quantity"];
    $customization = $_GET["customization"];
    

    
    //$add = $_

    // $cart = $_SESSION["testCart"];  // the cart (an associative array variable)
    // $test_quantity = $cart["testQuantity"];  // the test quantity that was added to the cart

    // TODO: query maximum quantity from DB and store in a local variable.

    // $_SESSION["cart"] = null;  // --- NOTE --- commented out b/c I'm trying to add the "cart" variable to the session.

    
    // if item_id (that's currently being processed) has already been added to the cart:
    //     update that cart variable
    // else:
    //     add to the cart (such as the test below).

    

    $itemExistsInCart = false;
    
    foreach ($_SESSION["cart"] as $cartItem) {
        if ($cartItem["Item_ID"] === $item_id) {   // if cart item ID equals working item_id (which this page is processing)
            $itemExistsInCart = true;
        }  
    }

    // NOTE: we're working on the code below here:
    
    if ($itemIDExistsInCart) {
        $_SESSION["cart"][""]  
    }


    $_SESSION["cart"]["testQuantity"] = $test_quantity;
    $_SESSION["cart"]["testCustomization"] = $test_customization;
    $_SESSION["cart"]["testColorChoice"] = $test_color_choice;

   // header('Location: cart.php');





?>