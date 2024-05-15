<?php
$date1 = "2016-07-31";
$date2 = "2016-08-05";

function dateDiff($date1, $date2)
{
    $date1_ts = strtotime($date1);
    $date2_ts = strtotime($date2);
    $diff = $date2_ts - $date1_ts;
    return round($diff / 86400);
}

$dateDiff = dateDiff($date1, $date2);

printf("Difference between in two dates : " . $dateDiff . " Days ");
print "</br>";
?>
