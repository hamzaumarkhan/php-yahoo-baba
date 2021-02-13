<?php
// PHP Date Function.. 
// Date Format .. Day(d = 01 to  31)(j = 1 to 31)(s = 15th  e.g)
//Month (F = jamuary)(m = 01)(M = jan)(n = 1)
//Year (Y = (2019)) (y = (19))
//Weak (D = (Mon)) (l = (Monday)) (N = ((1) = Monday Starting))  (w (1) = Sunday Strting)
echo "Today is " . date("d") . "<br>";

echo "Today is " . date("jS") . "<br>";

//For Month Full letter..
echo "Month is " . date("F") . "<br>";
// Use for Month Numaric Letter..(e.g = 02)
echo "Month is " . date("m") . "<br>";
// Use for Month Numaric Letter Without 0 (e.g 2)
echo "Month is " . date("n") . "<br>";
// Use for Month (e.g = Feb)
echo "Month is " . date("M") . "<br>";
// Function For Year... 
// Use for year (e.g = 2021)
echo "Year is " . date("Y") . "<br>";
// Use for year (e.g = 21)
echo "Year is " . date("y") . "<br>";
// Function For Full Date.. 
// Return (e.g = 03/02/2021)
echo "Full Date is " . date("d/m/Y") . "<br>";
// Return (02/Feb/2021)
echo "Full Date is " . date("d/M/Y") . "<br>";
// Function For Weak.. 
//Return weak Day (e.g = (Wed))
echo "Weak Day is " . date("D") . "<br>";
// Return Weak Day (e.g = (Wednesday))
echo "Weak day is " . date("l") . "<br>";
// Return Weak Day in Numaric Va (e.g = (3))
echo "Weak day is " . date("N") . "<br>";
// Return Weak day But starting Sunday First code is 0 (e.g = 3)
echo "Weak day is " . date("w") . "<br>";
// Year day is This (e.g = (33))
echo "Day of the year " . date("z") . "<br>";
// Weak of the (e.g = ())
echo "Weak of the year " . date("W") . "<br>";
// Days of the Month.. 
echo "Days of the Month " . date("t") . "<br>";
// Is this is leap year .. 
echo "Is This Is Leap Year" . date("L") . "<br>";



?>