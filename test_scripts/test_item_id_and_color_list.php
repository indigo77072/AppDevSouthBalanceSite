<?php
// creaetd by Willl 4/6

include('../item_id_and_color_list.php');

// test 0 - shoudl fail
// echo getItemIDFromItemColor(0, "blue");
// 4/6 didn't fail - debug
// 4/6 - note that hte sln to this involves making a validation module for proper item_id's.
// sln completed: 4/6
// 4/6 worked- failed as excpected

echo getItemIDFromItemColor(1, "blue") . "<br>";
echo getItemIDFromItemColor(1, "green") . "<br>";
echo getItemIDFromItemColor(11, "blue") . "<br>";
echo getItemIDFromItemColor(24, "green") . "<br>";
echo getItemIDFromItemColor(26, "blue") . "<br>";
echo getItemIDFromItemColor(17, "green") . "<br>";
echo getItemIDFromItemColor(15, "blue") . "<br>";
// should be 1, 25, 11, 24, 13, 15, 17 - worked 4/6


?>