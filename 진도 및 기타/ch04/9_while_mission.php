<?php
    
    // 1~rand를 더한값을 출력
    $val = rand(50, 100);
    print "val : $val <br>";
    
    $i = 0;
    $sum = 0;
    
    while ($i < $val)
    {
        $i++;        
        $sum+=$i;

    }
    
    print "$sum";
    /*
    $sum2 = 0;
    for($z = 0; $z < $val; $z++)
    {
        $sum2 += $z;
    }

    print "$sum2";
    */
?>