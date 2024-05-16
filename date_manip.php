<?php

// echo date("d-m-y");
$date=date_create("2024-02-11");

date_modify($date,"-1year");
echo date_format($date,"Y-m-d");
?>