<?php

$string = "welcome to BVMEngg";

$length = strlen($string);
echo "Length of the string: " . $length . "<br>";

$reversed_string = strrev($string);
echo "Reversed string: " . $reversed_string . "<br>";

if (strpos($string, "BVM") !== false) {
    echo "BVM found within the string.<br>";
} else {
    echo "BVM not found within the string.<br>";
}

$title_case_string = ucwords($string);
echo "String in title case: " . $title_case_string . "<br>";

$a = "HI";
$$a = "There";
echo $a;
echo "<br>";
echo $$a . "<br>";
echo $HI;
?>