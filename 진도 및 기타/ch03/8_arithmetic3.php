<?php
    //&&(and) : true 만들기가 힘듬. false 만들기가 쉬움.
    //||(or)  : false 만들기가 힘듬. true 만들기가 쉬움.

    $name = 1;

    if(1 && 1 && 1 && 1 && 2 && 'a' && $name) 
    // 숫자는 0만 false 문자는 빈칸만 false
    {
        print "나는 진실이다.";
    }
    
    
    if(1 || 1 || 1 || 0 || 1)
    {
        print " it's true";
    }

?>