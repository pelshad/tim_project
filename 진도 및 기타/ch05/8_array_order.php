<?php
    $arr_age = array(
        "Peter" => 35,
        "Ben" => 37,
        "Joe" => 43,
        "John" => 23
    );

    // 값 정령
    //sort(오름차순), rsort(내림차순)

    $copy_arr_1 = $arr_age;
    print "copy : ";
    print_r($copy_arr_1);
    print "<br>";
    print "<br>After sort-------<br>";

    sort($copy_arr_1);     

    print "origin : ";
    print_r($arr_age);
    print "<br>";
    print "copy : ";
    print_r($copy_arr_1);
    print "<br>";

    print "<br>After ksrot-------<br>";

    //키 정렬
    //ksrot(오른차순) krsort(내림차순)

    $copy_arr_2 = $arr_age;
    print "copy : ";
    print_r($copy_arr_2);
    print "<br>";

    ksort($copy_arr_2);

    print "copy2: ";
    print_r($copy_arr_2);
    print "<br>";

    //키 값 변경없이 정렬
    //asort, arsort

    $copy_arr_2 = $arr_age;
    print "copy : ";
    print_r($copy_arr_2);
    print "<br>";

    asort($copy_arr_2);

    print "copy2: ";
    print_r($copy_arr_2);
    print "<br>";
    


?>