<?php
// strtotime Function.. 
echo date("d-m-Y",strtotime("3 march 2005")) . "<br>";
echo date("d-m-Y H:m",strtotime("+5 hours")) . "<br>";
echo date("d-m-Y H:m",strtotime("+1 weak")) . "<br>";
echo date("d-m-Y H:m",strtotime("+1 weak 3 days 7 hours 5 seconds")) . "<br>";
echo date("d-m-Y H:m",strtotime("next Monday")) . "<br>";
// strftime
echo strftime("%B %d %Y, %X %Z") . "<br>";

echo strftime("%B %d %Y, %X %Z", mktime(21,30,0,05,18,2005)) . "<br>";

?>