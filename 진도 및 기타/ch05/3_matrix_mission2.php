<?php
    $scores = array(
        //     국   영   수
        array(20, 100, 100), 
        array(10, 80, 70),    
        array(10, 65, 75),
        array(90, 88, 55)    
    );
    /*$name = array("국어", "영어", "수학");
    $sum_scores = array(0,0,0);
    for($i=0; $i<count($scores[$i]); $i++)
    {
        for($z=0; $z<count($scores); $z++)
        {
            $sum_socres += $socres[$z][$i];
        }
    }

    for($i=0; $i<count($scores); $i++){
        print $name . "의 합계 : " . $sum_scores . "<br>";
    }*/



























    
    $name = array("국어", "영어", "수학");
    $sum_scores = array(0,0,0);
    for($i=0; $i<count($scores[$i]); $i++)
    {
        for($z=0; $z<count($scores); $z++){
            $sum_scores[$i] += $scores[$z][$i];
        }
    }

    for($i=0; $i<count($scores[$i]); $i++){
        print $name[$i] . "의 합계 : " . $sum_scores[$i] . "<br>";
        print $name[$i] . "의 평균 : " . $sum_scores[$i] / count($scores[$i]) . "<br>";
        
    }
    
    ?>