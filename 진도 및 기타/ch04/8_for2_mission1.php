<?php

    for($z = 2; $z <= 9; $z++)
    {
        for($i = 1; $i <= 9; $i++)
        {
            /*$result = $z * $i;
            print " ${z} x ${i} = $result <br> ";*/
            echo "${z} x ${i} = " . $z * $i . " <br>";
        }
        print "------------<br>";
    }
?>