<?php
   //$dan = rand(2,9);

   //print_gugudan($dan);
   print_gugudan_from_to(3,6);

   function print_gugudan_from_to($n1, $n2){
       for($i = $n1; $i <= $n2; $i++)
           for($z = 1; $z <= 9; $z++){
               $p = $i * $z;
               print "${i} x ${z} = ${p}<br>";
           }      
       
   }
?>