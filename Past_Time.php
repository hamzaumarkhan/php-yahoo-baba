<<?php

// Check Past Time
echo "Time And Date : " . date("d-m-Y h:i:sa") . "<br><br>";
// Show Past Date Time.. 
// l for Weak day 
// 0 Minute, 0 Second, 0 Hour means 12am, 10 Month, 15 date, year 2003.. 
// This Function only day name ..
//echo date("l", mktime(0,0,0,10, 15, 2003));

// This Function Return Full Date Day Month Year
echo date("d-m-Y", mktime(0,0,0,10, 15, 2003)) . "<br><br>";

// gmmktime GMT Time
echo date("d-m-Y", gmmktime(0,0,0,10, 15, 2003)) . "<br><br>";


// Return Future Date ... 
$date = date_create("2025-03-15");
echo date_format($date, "d/m/Y   H:i:s") . "<br><br>";

// According to set this time date.. 
$date = date_create("2025-03-15 22:24:00", timezone_open("Asia/Karachi"));
echo date_format($date, "d/m/Y   H:i:s");   

?>