<?php
    $star = rand(3,10);

    //print_star_line($star);
    print_star_triangle($star);

    /*function print_star($star){
        for($i = 1; $i < $star; $i++){
            for($j = 1; $j <= $i; $j++){
                echo "*";
            }
            echo "<br>";
        }
        }
    */
    /*function print_star_line($star){
        for($i=1; $i<=$star;$i++){
            for($z=1; $z<=$star;$z++){
                echo "*";
            }
                echo"<br>";
        }
    }*/
    function print_star_triangle($star){
        for($i = 1; $i <= $star; $i++){
            for($z= 1; $z < $i; $z++)
            echo "*";
            print "<br>";
        }
        
    }
    
?>