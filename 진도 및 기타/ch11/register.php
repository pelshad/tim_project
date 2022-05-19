<?php
    session_start();
    $_SESSION['var1'] = "v1";
    $_SESSION['var2'] = "v2";

    //unset($_SESSION['var2']); // var2세션 즉시 종료

    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>";
?>
<a href="session_destory.php">destroy</a>

    
