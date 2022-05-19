<?php
    $arr = [10, 20, 30, 40, 50];
    $num = 5;

    /*function add_array($arr, 10)
    {
        for($i = 1; $i <= count($arr); $i++){
            $arr [$i] = 
        }
    }
    add_array($arr, 10);
    print_r($arr);

    for($i = 0; $i <= count($arr); $i++){
        
    }*/

    plus_array($arr, 5);
    print_r($arr);

    function plus_array(&$arr, &$val){
        foreach($arr as $k = > $v){
            $arr[$k] = $v + $val;
        }
    }



?>