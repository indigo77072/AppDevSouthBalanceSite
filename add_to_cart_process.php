<?php
    include 'database.php';  // start session and connect to DB

    $cart = $_SESSION["testCart"];  // the cart (an associative array variable)
    $test_quantity = $cart["testQuantity"];  // the test quantity that was added to the cart

    // TODO: query maximum quantity from DB and store in a local variable.

    if ($test_quantity > 0) {
        $_SESSION["cartTestQuantity"] = $test_quantity;
        
    }




?>