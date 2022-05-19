<?php
    $arr = [2, 33, 12, 8, 1, 89, 11];

    for($i=0; $i < count($arr); $i++){
        if($arr[$i] < $arr[$i + 1]){
            $min = $arr[$i];
        }
        
    
    }
 
    
    print $min . "<br>";
    print_r($arr);
    





?>
