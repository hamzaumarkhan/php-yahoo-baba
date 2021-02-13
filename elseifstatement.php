<?php
$per = 80;
if ($per >= 80 && $per <= 100) {
    echo "you are in Merit.";
}elseif ($per >=60 && $per <=80) {
    echo "First Devision";
}elseif ($per >= 45 && $per<=60) {
    echo "second Devision";
}elseif ($per >=33 && $per <=45 ) {
    echo "Third Devision";
}elseif ($per < 33) {
    echo " you are fail";
}else {
    echo "please enter your vaild percentage";
}


?>