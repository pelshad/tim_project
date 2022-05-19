<?php
    $end_val = 10;
    echo "[";
    for($i = 1; $i < $end_val; $i++)
    {
        print $i;
        if($i < $end_val)
        {
            print ", ";
        }
    }
    echo "]";
?>