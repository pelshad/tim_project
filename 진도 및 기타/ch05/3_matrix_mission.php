<?php
    $scores = array(
        //     국   영   수
        array(1, 100, 100), //영수
        array(10, 80, 70),    //순자
        array(10, 65, 75)     //영철
    );
    
    $names = array("국어", "영어", "수학");
    $each_scores = array(0,0,0);

    for($i=0;$i<count($scores); $i++)
    {
        for($z=0; $z<count($scores[$i]); $z++)
        {
            $each_scores[$i] += $scores[$z][$i];
        }
    }

    for($i=0; $i<count($names); $i++)
    {
        print $names[$i] . " : " . $each_scores[$i] . "<br>";
        print $names[$i] . " 평균 : " . $each_scores[$i] / count($each_scores) . "<br>"; 
        
    }
    
    
    ?>