<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function getDaysDifference($startDate, $endDate)
    {
        $start = new DateTime($startDate);
        $end = new DateTime($endDate);

        $interval = $start->diff($end);
        return $interval->days;
    }

    $startDate = $_POST['startdate'];
    $endDate = $_POST['enddate'];

    $daysDifference = getDaysDifference($startDate, $endDate);

    echo "Total number of days between $startDate and $endDate is: $daysDifference days";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        <input type="date" name="startdate" id="">
        <input type="date" name="enddate" id="">
        <input type="submit" value="Submit">
    </form>
</body>

</html>