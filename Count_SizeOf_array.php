<?php
        // Count And SizeOf Array function..... 
        $Student = array('Hamza','Ayaz','Ahmed','Farman');
       // echo count($Student);



        //Multidimensional Array....
        // $college = array(
        // 'Teacher' => array('Zeshan','Yasir','Hamed','Faqir Gull'),
        // 'Student' => array('Hamza','Ayaz','Ahmed','Farman')
   // );

   $len = count($Student);
   for($i = 0; $i < $len; $i++){
    echo $Student[$i]. "<br> ";
   }
    //echo count ($college,1);

        // Array count value ....

        $Student = array('Hamza','Ayaz','Ahmed','Farman');
        // just tell About Array...

        echo "<pre>";
        print_r(array_count_values($Student));
        echo "</pre>";



?>