<?php

    //rand를 10이 나올대까지 반복 10이 나오면 스탑,
    print "--시작<br>";
    /*while ($r_val = rand(1, 10)){

        if($r_val != 10){
            print "r_val : $r_val <br>";
        }
        
        else{
            print "끝--";
            break;
        }
        
    }*/

    while(true){
        $r_val = rand(1, 10);
        if($r_val == 10) { break; }
        print "r_val : $r_val <br>";
    }
    print "끝";

    

?>