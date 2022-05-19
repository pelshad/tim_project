<?php
    //증감 연산자
    $n1 = 10;
    
    $n1++; // = $n1 + 1; 
    print "$n1 <br>";

    ++$n1;
    print "$n1 <br>";

    print "----------<br>";

    $n2 = 10;
    $sum = 10 + $n2++; // 읽기를 먼저하고 쓰기를 해서 10+10 이후 n2에 +1
    print "$sum <br>";
    print "$n2 <br>";

    $n2 = 10;
    $sum = 10 + ++$n2;
    print "$sum <br>";
    print "$n2 <br>";

    print "----------<br>";

    $n3 = 10;
    $n3 +=2; // = $n3 + 2;
    print "$n3 <br>";

    print "----------<br>";

    $oprd1 = '10';
    $oprd2 = 10;

    $result = $oprd1 == $oprd2;
    print "$oprd1 == $oprd2 : $result <br>"; // 값이 참이면 : 1

    $result = $oprd1 === $oprd2;
    print "$oprd1 === $oprd2 : $result <br>";  // ==은 값만 ===은 타입도 같아야 참

    $result = $oprd1 != $oprd2;
    print "$oprd1 != $oprd2 : $result <br>";

    $result = $oprd1 > $oprd2;
    print "$oprd1 > $oprd2 : $result <br>"; // 값이 참이면 : 1

?>