<?php
print "------------break<br>";
for($i=1; $i < 100; $i++){
    if($i == 12) {break;}
    print $i . "<br>";
    
}

print "------------continue<br>";
for($i=0; $i < 20; $i++){
    if($i == 12) {continue;} // 12는 출력하지 않고 다시 조건식으로 스킵
    print $i . "<br>";
    
}


?>