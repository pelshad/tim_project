<?php
    //변수에 값이 있을 경우 {}를 처리
    if(isset($name)){
        print "name is ok!!";
    }

    $name = "Hong";
    if(isset($name)){
        print "name is ok!! <br>";
    }
    print $name . "<br>";

    unset($name); // 변수 해제
    print $name;

    print "The end";

?>