<?php
    //재귀함수
    // 내가 함수라면 내가 나를 호출하는것.

    // 팩토리얼 구현

    //$num = 5;
    $val = -3;
    
    /*$result = 1;
    for($i = 1; $i <= $num; $i++){
        $result *= $i;        
    }
    print $result;*/

    //$result = factorial2($num);
    $result2 = myabs($val);
    
    // v1 +
    /*function factorial($num) {
        $result = 1;
        for($i = 1; $i <= $num; $i++){
            $result *= $i;
        }
        return $result;
    }*/
    // v2 -
    /*function factorial2($num) {
        $result = 1;
        for($i = $num; $i > 0; $i--){
            $result *= $i;
        }
        return $result;
    }*/

    // v3 재귀함수
    

    /*function factorial_rec($num)
    {
        if($num ===1 ) {return 1;}
        return $num * factortial_rec($num - 1);
    }*/

    //절대값 만들기
    function myabs($val){
        if($val < 0) {$val = $val * -1;} // return -$val도됨
        if($val === 1 ) {return 1;}
        return $val * myabs($val - 1);
    }

    //print "${num}! = $result <br>";
    print "${val}! = $result2 <br>";
?>