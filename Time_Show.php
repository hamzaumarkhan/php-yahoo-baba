<?php
// Time Show Function . . 
// For Hour = (h = (01 to 12 hour))
// For Hour = (H = (00 t0 23 For 24 hour))
// For Hour = (g = (1 to 12 Hour))
// For Hour = (G = (0 to 23 For 24 Hour))
// For Minutes = (00 to 59 for Minutes)
// For Second = (00 to 59 For Second)
// Meridiem am/pm 
// For am/pm (a (am or pm))
// For AM/PM (A (AM OR PM))
echo "Hour is " . date("h") . "<br>";// 12 Hours Timing
//24 Hours Timning
echo "Hour is " . date("H") . "<br>";
// Hours Without 0.. 
echo "Hour is " . date("g") . "<br>";
// Hours with 0..
echo "Hour is " . date("G") . "<br>";

// For Mintes .. 
echo "Minute is " . date("i") . "<br>";
// Second is .. 
echo "Second is " . date("s") . "<br>";
// Meridiem is .. pm/am
echo "Meridiem is " . date("a") . "<br>";
// Meridiem is ... PM/AM
echo "Meridiem is " . date("A") . "<br>";
// For Time.. 
echo "Time is " . date("h:i:sa e") . "<br>";
// Time and Date.. 
echo "Time And Date " . date("d-m-Y h:i:sa") . "<br>";
// Set Time 
date_default_timezone_set("Asia/Karachi");
echo "Time is " . date("h:i:sa") . "<br>";

// e return country name.. 
date_default_timezone_set("Asia/Karachi");
echo "Time is " . date("h:i:sa e") . "<br>";



?>