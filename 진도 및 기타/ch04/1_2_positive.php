<?php
    $result = 1;
    if($result > 0)
    {
        //$result 값을 반으로

        //$result = $result / 2;
        //$result = $result * 0.5 //나누기보다 곱하기가 처리속도가 더 빠름
        $result *= 0.5;

        print "$result <br>";
        print "positive <br>";
    }
    else
    {
        print "$result <br>";
        print "negative <br>";
    }

?>