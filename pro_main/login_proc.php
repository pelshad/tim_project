<?php
    include_once "db/db_user.php";
    session_start();

    $user_id = $_POST["user_id"];
    $user_pw = $_POST["user_pw"];
    $param = [
        "user_id" => $user_id,
        "user_pw" => $user_pw
    ];

    $result = sel_user($param);

    if(empty($user_id)){
        echo "올바른 ID를 입력해주세요.";
        die;
    }

    echo $user_pw;
    echo $result["user_pw"];

    if($user_pw == $result["user_pw"]){
        $_SESSION["login_user"] = $result;
        header("location:main_page.php");
    } else {
        echo "잘못된 비밀번호 입니다.";
        die;
    }

?>