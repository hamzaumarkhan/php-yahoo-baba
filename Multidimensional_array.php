<?php
$emp = [
    [1,"Zishan", "Manager","90000"],
    [2,"Hamza", "Web_Developer","80000"],
    [3,"Ali", "Web_Designer","40000"],
    [4,"Farman", "Wordpress Expert","60000"]
];
    $colom ["m ali","hamza"];


            // Readable data print column & row use for loop...
        // for($row = 0; $row < 4; $row ++) {
        //     for($col = 0; $col < 4; $col ++) {
        //         echo $emp[$row] [$col]. " ";

        //     }
        //     echo "<br>";
        // }
        // Readable data print column & row use forEachloop...best as compare to for loop...
        echo "<table border='2px' cellpaidding='5px' cellspacing='0'>";
        echo "<tr>
            <th>Emp Id.</th>
            <th>Emp Name</th>
            <th>Designation</th>
            <th>Salary</th>
            </tr>";
        foreach($emp as $v1) {
            echo "<tr>";
            foreach($v1 as $v2) {
                echo "<td> $v2 </td>";

            }
            echo "</tr>"; 
        }
        echo "</table>";
             // print single person....
         echo $emp [0][0]. "  ";
         echo $emp [0][1]. "  ";
         echo $emp [0][2]. "  ";
         echo $emp [0][3]. "  ";
         echo "<pre>";
        print_r($emp);
         echo "</pre>";


?>