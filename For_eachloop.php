<?php
$name = [
    "Hamza Umar",
    "Farman Javeed",
    "Zeshan Amin"
    ];

    foreach ($name as $username) {
        echo $username . "<br>";
    }

    //Associative Array print with the help of foreach.....
    $age = [
        "bill" => 21,
        "steve" => 18,
        "elon" => 30,
    ];
    foreach ($age as $key => $yourage) {
        echo " $key = $yourage  <br>";
    }
?>