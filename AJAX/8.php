<?php
$to_date = time(); // Current date and time in Unix timestamp format
$from_date = strtotime("2012-01-31"); // Convert the specified date string to a Unix timestamp
$day_diff = $to_date - $from_date; // Calculate the difference in seconds between the two timestamps
echo floor($day_diff/(60*60*24))."\n"; // Convert the difference to days and print it
?>