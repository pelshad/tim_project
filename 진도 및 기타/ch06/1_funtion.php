<?php
    /* 객체 안에 함수가 있으면 method(메소드)라고 부른다.
    객체 안이 아니라면 function(함수)라고 부른다.*/
    //function  변수명 (값, 값){ return 식 ;}

    function sum($n1, $n2){
        return $n1 + $n2;
    }

    $result = sum(10,20);

    print "result : $result <br>";
    print "result : " . sum(30,40) . "<br>";

    function sum2 ($s1, $s2, $s3){
        return $s1 * ($s2 + $s3);
    }

    $sum2 = sum2(2,3,4);
    print $sum2;

?>