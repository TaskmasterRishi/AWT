<?php
$date2 = date_create("2005-01-04");
$date1 = date_create(); // current date

echo "System date: " . date_format($date1, "d m Y") . "<br>";
echo "User date: " . date_format($date2, "d m Y") . "<br>";

$diff = date_diff($date2, $date1);
$ageInDays = $diff->format("%R%a");
$ageInYears = $ageInDays / 365;

echo (int)$ageInYears;
?>
