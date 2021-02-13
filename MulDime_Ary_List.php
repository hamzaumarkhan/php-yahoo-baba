<?php

    // Multidimensional Array with List function....
    $Employee = [
        [1, "Yasir Sohail","AppD eveloper",90000],
        [2, "Zeshan Amin", "Web Developer",80000],
        [3, "Hamza Umar", "Web Developer", 70000],
        [4,"Farman", "Wordpress Expert", 60000 ]
    ];
    echo "<table border='2px' cellpadding='5px' cellspacing='0px'>
                <tr>
                <th>Emp_ID.</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Salary</th>
               </tr>";

    foreach($Employee as list($id, $name, $designation, $salary)) {
        echo  "<tr> <td> $id</td> <td> $name</td> <td> $designation</td> <td> $salary</td> </tr>";
    }
    echo "</table>";

 



    ?>
