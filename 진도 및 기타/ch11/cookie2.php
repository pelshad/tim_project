<?php 
    echo "Country : ", $_COOKIE['country'] , "<br>";

    setcookie("country", "한국");

    $_COOKIE['country'] = "UK";
    echo "Country : ", $_COOKIE['country'] , "<br>";

    //unset($_COOKIE['country']);//서버 값지우기
    //setcookie("country");//브라우저 값지우기

    echo "Country : ", $_COOKIE['country'] , "<br>";