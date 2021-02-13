<?php 

        // Multi Dimensional Associative Array.....
$marks = [
            "Hazrat Khan" => [
                "Php" => 85,
                "Java" => 80,
                "Python" => 70
            ],
            "Ayaz"  => [
                "Php" => 75,
                "Java" => 60,
                "Python" => 50
            ],
            "Hamza Umar" => [
              "Php" => 50,
              "Java" => 87,
              "Python" => 65 
            ],
        ];
            echo "<table border='2px' cellpadding='5px' cellspacing='0px'>
            
                <tr>  
                <th>Student Name</th>
                <th>PHP</th>
                <th>JAVA</th>
                <th>PYTHON</th>
                
                
                
                
                </tr>";
        foreach($marks as $key => $v1) {
            echo "<tr> 
                        <td> $key </td>" ;
            foreach($v1 as $v2) {
                echo  "<td> $v2  </td> ";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<pre>";
        print_r($marks);
        echo "</pre>";
        ?>