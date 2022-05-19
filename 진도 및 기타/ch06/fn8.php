<?php
    $val = rand(2, 5);

    print_table($val);

    function print_table($val){
        $num = 1;
        echo "<table>";
        for($i = 1; $i <= $val; $i++){
            echo "<tr></tr>";
            for($z = 1; $z <= $val; $z++){
            echo "<td>" . $num++ . "</td>";
            }
        }
        echo "</table>";
    }

    /* function print_table($val){
        $num = 1;
        echo "<table border=1>";
        for($i = 1; $i <= $val; $i++){
            print "<tr></tr>";
            for($z = 1; $z <= $val; $z++)
            {print "<td>" . $num++ . "</td>";
            }
            
        }
        echo "</table>";
    } */

?>