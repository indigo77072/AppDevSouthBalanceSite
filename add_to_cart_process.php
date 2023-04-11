<?php
    include 'database.php';  // start session and connect to DB


    $test_quantity = $_GET["testQuantity"];
    $test_customization = $_GET["customization"];
    $test_color_choice = $_GET["color_choice"];
    if(isset($_GET["add"])){
        $item_id=$_GET["add"];
      echo $item_id;
    }
    //$add = $_

    // $cart = $_SESSION["testCart"];  // the cart (an associative array variable)
    // $test_quantity = $cart["testQuantity"];  // the test quantity that was added to the cart

    // TODO: query maximum quantity from DB and store in a local variable.

    // $_SESSION["cart"] = null;  // --- NOTE --- commented out b/c I'm trying to add the "cart" variable to the session.

    
    // if item_id (that's currently being processed) has already been added to the cart:
    //     update that cart variable
    // else:
    //     add to the cart (such as the test below).
    
   /* foreach ($_SESSION as $cartItem) {
        if 
    }*/

    $_SESSION["cart"]["testQuantity"] = $test_quantity;
    $_SESSION["cart"]["testCustomization"] = $test_customization;
    $_SESSION["cart"]["testColorChoice"] = $test_color_choice;

   // header('Location: cart.php');





?>