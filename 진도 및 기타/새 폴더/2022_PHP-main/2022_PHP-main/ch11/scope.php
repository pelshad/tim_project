<?php
    function A()
    {        
        global $n;
        $n = "A";
        $m = "A";
        print "$n, $m<br>";
    }

    $n = "M";
    $m = "M";

    print "1: $n, $m<br>";
    A();
    print "3: $n, $m<br>";
