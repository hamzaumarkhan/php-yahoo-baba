<?php
        // passing argument by value....
    function testing(&$string) {  // & use for reference address...
    $string .= " and something extra.";
}
    $str = "this is a string";
    testing($str);
    echo $str;
           // passing argument by refrence.....
        function first ($num) {
         $num += 5;       
        }

        function second (&$num) {
            $num += 7;
        }
        $number = 10;
        first($number);
        echo "orignal value is $number<br>";
        second($number);
        echo "orignal value is  $number<br>"
?>