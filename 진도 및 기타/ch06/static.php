<?php
    function inc(){
        static $i = 1;
        print $i ."<br>";
        $i += 1;
    }
    for($i=0; $i<10; $i++){
        inc();
    }

    print "---------------<br>";
    
    /*$z= 1;
    function inc2(){
        global $z;
        print $z . "<br>";
        $z += 1;
    }

    for($z=0; $z<10; $z++){
        inc2();
    }*/
?>