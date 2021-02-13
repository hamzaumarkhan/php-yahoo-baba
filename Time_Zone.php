<?php
// Time Zone Php
// Time Zone Get...
date_default_timezone_set("Asia/Karachi"); 
echo date_default_timezone_get();
$tz = timezone_open("Asia/Karachi");
echo timezone_name_get($tz) . "<br>";
echo "<pre>";
print_r(timezone_location_get($tz));
echo "<pre>";

?> 