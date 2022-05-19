<?php
    $sum = 0;

foreach(array(1,2,3,4,6,7,8) as $val){
    $sum += $val;}

    print $sum . "<br>";

// function
func_sum(1,2,3,4,5,6,7,8);

$sum2 = 0;

function func_sum(...$vals){
    foreach($vals as $val2)
    {
        $sum2 += $val2;
    }
    print $sum2;
}
?>

