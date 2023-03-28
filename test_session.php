<?php
session_start();
?>
<!DOCTYPE html>
<!--
    This page is for testing various session PHP code.
-->



<html>
<head>
</head>
<body>
    
    <?php
        echo "Fav color is " . $_SESSION["favcolor"] . ".<br>";
        echo "Fav animal is " . $_SESSION["favanimal"] . ".<br>";
?>

</body>
</html>