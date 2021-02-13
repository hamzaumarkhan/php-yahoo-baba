<?php
    $x = 10;
function test() {
    // x is a local vaiable in this variable scope only in this function.....
    
     global  $x;
    echo "Variable X inside function : $x <br>";
}

test();
// not working x variable here....
echo "Variable X outside function : $x";


?>