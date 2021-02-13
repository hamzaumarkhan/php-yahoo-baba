<?php
// Use For Check date.. 
echo checkdate(2, 15, 2024);
//create Date.. 
$date1 = date_create("2013-03-15");
$date2 = date_create("2013-12-12");

$diff = date_diff($date1, $date2);
echo "<pre>";
print_r ($diff);
echo "</pre>";

// Check Single.. 
$date1 = date_create("2013-12-15");
$date2 = date_create("2013-03-12");

$diff = date_diff($date1, $date2);
// Check Different.. 
//echo $diff->days . "days";
// Second Method.. // a use for total no of diffrenc.
echo $diff->format("%r%a days");

echo "<pre>";
print_r ($diff);
echo "</pre>";





?>