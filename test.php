<!--
    This page is for testing various PHP code.
-->

<html>
<head>
</head>
<body>

<form action="test.php" method="post">
    Num 1: <input type="number" name="num1"><br>
    OP: <input type="text" name="op"><br>
    Num 2: <input type="number" name="num2"><br>
    <input type="submit">

</form>

<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];

if ($op == "+") {
    echo $num1 + $num2;
} else if ($op == "-") {
    echo $num1 - $num2;

} else if ($op == "*") {
    echo $num1 * $num2;

} else if ($op == "/") {
    echo $num1 / $num2;
} else {
    echo "Invalid operator";
}


?>
</body>
</html>