<?php
    session_start();
    session_destroy();//세션이 종료되긴 하나 당장은 보임(새로고침하면 종료된 모습이 보임)
    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>";

?>
<a href="confirm.php">확인</a>