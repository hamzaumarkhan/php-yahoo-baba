<?php
// date_add(), date_sub() &  date_modify()... 

// date_add  Use for Adding date in Existing date.. 
$date = date_create("2015-05-15");
date_add($date, date_interval_create_from_date_string("30 days"));
echo date_format($date , "d-m-Y") . "<br><br>";

// date_sub  Use for Subtracting date in Existing date.. 
$date = date_create("2015-05-15");
date_sub($date, date_interval_create_from_date_string("12 days"));
echo date_format($date , "d-m-Y") . "<br><br>";


// date_modify  Use for Adding and Subtracting date in Existing date.. 
$date = date_create("2015-05-15");
date_modify($date, "10 days");
echo date_format($date , "d-m-Y") . "<br><br>";





?>