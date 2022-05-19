<?php
    $star = rand(2, 10);
    
    print "$star <br>";
    
    for($i = 1; $i <= $star; $i++)
    {
        for($z = $star - 1; $z <= $star; $z++)
        {
            $result = $star - $z;
            print "*";
        }
        print "<br>";
    } 
    
?>