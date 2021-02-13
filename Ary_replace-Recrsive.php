<?php
        // Array replace and recursive Function..... 
        $fruit = ['Banana','Apple','Graps', 1 =>'Mango'];
        $vegi = ['carrot', 'pea'];
        $newArray = array_replace($fruit,$vegi);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";

        // Array pop and push function (41 lecture)...
        $name = ["Hamza","Bilal","Hazrat","Ali"];

        // First array pop function use for delet the array last  value...
        $color = ["Green","pink","red","yellow"];
        array_pop($color);
        echo "<pre>";
        print_r($color);
        echo  "</pre>";

          // Second array push function use for add in array last new  value...
        $color = ["Green","pink","red","yellow"];
        array_push($color,"black");
        echo "<pre>";
        print_r($color);
        echo  "</pre>";

        // Array Shift and array unshift function...... 
        $a = ["Hamza Umar","Zeshan Amin","Farman"];

        // Array Shift function use for remove array first value..... 
        $emp = ["Hazrat","Khan","Rameez"];
        array_shift($emp);
        echo "<pre>";
        print_r($emp);
        echo "</pre>0";

       // Array UnShift function use for add array first value... 
       $emp = ["Hazrat","Khan","Rameez"];
       array_unshift($emp,"Hamza");
       echo "<pre>";
       print_r($emp);
       echo "</pre>0";

       // Array (merge) and array (combine) function.. 
        // Array merge function .... 
        $a = ["color","name","food"];
        $b = ["Arham"," Ali"];
        $newArray = array_merge($a,$b);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        // Array combine function ... 
        $name = array("Arham","Ali","Farman");
        $age = array("5","10","20");
        $newArray = array_combine($name,$age);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";

        // Array Slice Function...
        $color = ["red","blue","green","yellow","black"];
        $newArray = array_slice($color,0,2);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        
        // Array Splice Function.... 
        $color = ["gray","yellow","blue","green","white","black"];
        $name = ["ali","hamza",];
        // array_splice function use for remove the value replace the value etc..
         array_splice($color,1,2,$name);
         echo "<pre>";
         print_r($color);
         echo "</pre>";
        //Array key function.... 
        $color = ["gray","yellow","blue","green","white","black"];    
        // first function array key return all array key..... 
        //$newArray = array_keys_first($color);
        //$newArray = array_keys_last($color);
        $color =[
                "first" =>"red",
                "second" =>"white",
                "third" =>"gray",
                "fourth" =>"black"


        ];

        $newArray = keys_exists("first",$color);
  
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";  
        


?>