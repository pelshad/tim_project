<?php
    $snum = 4;
    $enum = 10;
    echo "[";
    prtin_num_from_to($snum, $enum);
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

    function prtin_num_from_to($snum, $enum){
        if($snum > $enum){
            echo "종료값이 더 작을 수 없습니다.";
            return;
        }
        for($i = $snum; $i <= $enum; $i++){
            echo $i;
            if($i < $enum){
                echo " , ";
            }
        }
    }

?>