<?php

  // Method first for Arrays....
$colors = array("Pink","Red","Yellow","Green");
echo $colors[0]. "<br>";
echo $colors[1]. "<br>";
echo $colors[2]. "<br>";
echo $colors[3]. "<br>";



    //Second metod....
// Special function for arrays ....

    $colors = ["red", "pink", "yellow"];
    // html <pre> tag .. ..use for decorating ...
    // Check for index values.......
    echo "<pre>";
    print_r($colors);
    echo "<pre>";


    // Third method for arrays.....
   $colors = ["red", "blue","green","pink", "gray"];
   echo "<ul>";
   for($a = 0;$a <= 4;$a ++) {
       echo  "<li> $colors[$a] </li>";
   }
   echo "</ul>";
  


?>
