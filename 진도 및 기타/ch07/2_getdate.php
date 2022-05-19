<?php
    $seoul = getdate();

    print "현재시간 : " 
        . $seoul["year"] . "년 " 
        . $seoul["mon"] . "월 "
        . $seoul["mday"] . "일 "
        . $seoul["hours"] . "시 "
        . $seoul["minues"] . "분 "
        . $seoul["seconds"] . "초";

    echo "<br>-----------<br>";
    
    $year = gmdate("Y");
    $mon = gmdate("m");
    $day = gmdate("d");
    $hour = gmdate("h");
    $min = gmdate ("i");
    $sec = gmdate("s");

    print "현재시간 ${year}년 ${mon}월 ${day}일 ${hour}:${min}:${sec}";

    print mt_srand(1);



?>