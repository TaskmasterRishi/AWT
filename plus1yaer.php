<?php
    $currentDate = date("d-m-y");
    $netYear = date("d-m-y",strtotime("+1 year"));
    echo "Current Date ".$currentDate;
    echo "<br>";
    echo  "Next Year's Date ".$netYear;
?>