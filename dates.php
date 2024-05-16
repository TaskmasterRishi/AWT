<?php
$date2 = date_create("2005-05-15");
$date1 = date_create(); // current date

echo "System date: " . date_format($date1, "d m Y") . "<br>";
echo "User date: " . date_format($date2, "d m Y") . "<br>";

$diff = $date2->diff($date1); 
$diff = $diff->days;
if ($diff % 2 == 0) {
    $color="red";
}
else{
    $color= "blue";
}
?>

<html>
    <head>
        <title>Date</title>
    </head>
    <style>
        *{
            background-color: <?php echo $color ?>;
        }
    </style>
</html>
