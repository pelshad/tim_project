<?php
    $num = 11;
    // 10은 짝수입니다.
    if ($num % 2 === 0){
        print "  ${num}은(는) 짝수입니다.";
    }
    else{
        print "  ${num}은(는) 홀수입니다.";
    }

    print "<br>";

    $num2 = 10;
    $odd_even = "홀";

    if($num2 % 2 ===0)
    {
        $odd_even ="짝";
    }

    print "${num2}은(는) ${odd_even}수입니다."
?>