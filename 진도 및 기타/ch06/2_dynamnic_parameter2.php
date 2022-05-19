<?php

    /*
    func_num_agrs() : 인자수 리턴
    func_get_agr() : 인자값 가져올 때 사용
    func_get_agrs() : 인자를 배열로 받음(array) = ...$vals
    */
    
    function print_sum(){
        print "func_num_args() : " . func_num_args() . "<br>";
        print "func_get_arg(0) : " . func_get_arg(0) . "<br>";
        print "func_get_arg(1) : " . func_get_arg(1) . "<br>";
    }
    print_sum(10,20);
    print_sum(9,11,13);
    

    function sum(){
        $sum = 0;
        foreach(func_get_args() as $val)
        {
            $sum += $val;
        }
        return $sum;
    }
    print "sum : " . sum(1,2) . "<br>";
    print "sum : " . sum(rand(1,13)) . "<br>";

    
    

?>