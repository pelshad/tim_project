<?php
/*$snum = rand(1, 12);
$enum = rand(2,13);

equl($snum, $enum);

function equl($snum, $enum){
    for($i = $snum; $snum > $enum ? $i >= $enum : $i <= $enum;
        $snum > $enum ? $i-- : $i++){
            print $i;
    }
    if($i > )
}*/

$val = -5;

$result = myabs($val);

function myabs($val){
    if($val < 0){$val = $val * -1;} 
    if($val === 1){return 1;}
    return $val * myabs($val - 1);
}

print $result;
?>