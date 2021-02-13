<?php
// getdate(), localtime() & gettimeofday().. 




$date = getdate();
echo $date['month']. " - ". $date['year'];

// getdate return current date.. 
echo "<pre>";
print_r(getdate());
echo "<pre>";

// old date and time return current date.. 
$olddate = mktime(0,0,0,03,15,2015);
$olddate = getdate($olddate);
echo $date['month']. " - ". $date['year'];
echo "<pre>";
print_r(getdate());
echo "<pre>";
// Current Time
echo "<pre>";
print_r(gettimeofday());
echo "<pre>";

// Return only Correct Time.. 
  echo gettimeofday(true);
// Return Local server time.. 
echo "<pre>";
print_r(localtime(time(),true));
echo "<pre>";


?>