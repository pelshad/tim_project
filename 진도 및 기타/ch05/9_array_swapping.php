<?php
    $arr = [10,33,12,9,1,83];

    print_r($arr);
    print "<br>";

    /* error
    $arr[0] = $arr[1];
    $arr[1] = $arr[0];*/

    $temp = $arr[0];
    $arr[0] = $arr[1];
    $arr[1] = $temp;

    print_r($arr);
    print "<br>";
?>