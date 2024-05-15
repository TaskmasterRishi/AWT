<?php
    $array = array(1, 2, 3, 4, 5);
$array = array_map(function($value) {
    return $value * 2;
}, $array);

echo implode(", ", $array);
?>

