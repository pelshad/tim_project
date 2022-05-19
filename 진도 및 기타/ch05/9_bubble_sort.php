<?php
    $arr = [7,4,5,77,1,3,8];
    //print_r($arr);
    print"<br>";        
    

    for($i = 0; $i < count($arr)-1 ; $i++){
        if($arr[$i] > $arr[$i + 1]){
            $temp = $arr[$i];
            $arr[$i] = $arr[$i + 1];
            $arr[$i + 1] = $temp;
            print_r($arr);
            print"<br>";
            }
    }
    
    /*for($i=count($arr)-1; $i>0; $i--){
        for($z=0; $z<$i; $z++){
            if($arr[$z] > $arr[$z+1]){
                $temp = $arr[$z];
                $arr[$z] = $arr[$z + 1];
                $arr[$z + 1] = $temp;
            }
        }
    }
    print_r($arr);*/

    /*for($i=count($arr) - 1; $i > 0; $i--){
        for($z=0; $z < $i; $z++){
            if($arr[$z] > $arr[$z + 1]){
                $temp = $arr[$z];
                $arr[$z] = $arr[$z + 1];
                $arr[$z + 1] = $temp;
            }
            print_r($arr);
            print "<br>";
        }  

    }*/
    /*
    print "----------------------------------------<Br>";

    print count($arr);
    print "<br>";
    for($i=0; $i < count($arr)-1; $i++){
        for($z=0; $z < count($arr)-1; $z++){
            if($arr[$z] > $arr[$z + 1]){
                $temp = $arr[$z];
                $arr[$z] = $arr[$z + 1];
                $arr[$z + 1] = $temp;
            }
        }
        print_r($arr);
            print "<br>";
    }*/
?>