<?php
function username($fname , $lname) {
    $v =  "$fname $lname";
    return $v;
}
    $name = username("Hamza","Umar");
    echo  "hello $name.<br> ";


        // function for  percentage....

        function percentage($Sumt) {
            $per = $Sumt / 3;
            //echo round($per, 2);
            echo number_format($per, 2, '.', ' ');
        }
       

        // Exmample sum of total number ...
        function sum($java, $php, $python) {
            $sno = $java + $php + $python;
            return $sno;
        }
        $totalno = sum(80,50,60);

        // Calling percentage function.....
        percentage($totalno);
        echo    "<br>" . $totalno;
        




?>