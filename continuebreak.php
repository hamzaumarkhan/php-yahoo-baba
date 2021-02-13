<?php
for($a = 1;$a <= 10;$a ++) {
    if($a == 5) {
       // continue; // this statement skip no 3......
       // echo "No :" . $a . "<br";
        break;  //  if here use break statement then skip all no after this 3 no...
    }
    echo "Number:" . $a . "<br>";
}


?>