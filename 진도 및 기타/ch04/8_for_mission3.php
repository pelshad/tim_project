<?php
    // for문을 활용하여 1~100을 더한 값을 구하시오

    $t = 0;
    for($i = 1; $i <= 100; $i++)
    {   
        //$t = $i + $t;    
        $t += $i;
        
    }
    print $t;
    print "<BR>";
        

?>