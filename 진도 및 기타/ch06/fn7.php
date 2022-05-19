<?php
    $mon = rand(0,15);

    $season = get_season($mon);

    //print "${mon}월은 ${season}입니다"

    function get_season($mon){
        
        switch($mon)
        {
            case 3: case 4: case 5:
            return "봄";           

            case 6: case 7: case 8:
            return "여름";           

            case 9: case 10: case 11:
            return "가을";           

            case 12: case 1: case 2:
            return "겨울";                 
        }
    }
    
    if($season){
        print $mon . "월은 " . $season . "입니다.";
        }
        else{
            print "${mon}월은 잘못된 값";
        }
        
        
?>