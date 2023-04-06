<?php
// creaetd by Willl 4/6

// no longer using htis script, 4/6

    include '../validate_item_id.php';

    $test_ids = array(0, 1, 27, 28);

    // should echo false t t f
    foreach ($test_ids as $id) {
        if (is_item_id_valid($id)) {
            echo "T";
        } else {
            echo "F";
        }
    }
    

?>