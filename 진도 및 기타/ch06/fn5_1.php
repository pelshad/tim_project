<?php
    $snum = 6;
    $enum = 22;
    echo "[";
    prtin_num_from_to2($snum, $enum);
    echo "]";

    // [4,5,6,7,8,9,10]
    // 만약 enum값이 더 작으면 "종료값이 더 작을 수 없습니다"가 출력
    /*function prtin_num_from_to($snum, $enum){
        if($snum > $enum){
            echo "종료값이 더 작을 수 없습니다";
        }
        for($i = $snum; $i <= $enum; $i++){            
            echo $i;
             if($i < $enum){
                echo " , ";
            }
        }
        
    }*/

    function prtin_num_from_to2($snum, $enum){
        
        for($i = $snum; $snum < $enum ? $i <= $enum : $i >= $enum; 
            $snum < $enum ? $i++ : $i--){
                if($i != $snum) {print ", ";}
                print $i;
            }
        
    }
    /*
    function prtin_num_from_to($snum, $enum){
        if($snum > $enum){
            for($z = $snum; $z >= $enum; $z--){
                echo $z;
                if($z > $enum){
                    echo " , ";
                }
            }
        }
    
        else{
            for($i = $snum; $i <= $enum; $i++){
                echo $i;
                if($i < $enum){
                    echo " , ";
                }
            }
        }
    }*/
?>