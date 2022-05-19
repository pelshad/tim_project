<?php
    include_once "db/db_user.php";
    
    $user_id = $_POST["user_id"];
    $user_pw = $_POST["user_pw"];
    $confirm_pw = $_POST["confirm_pw"];
    $nm = $_POST["nm"];
    $user_num = $_POST["user_num"];
    $bank_nm = $_POST["bank_nm"];
    $bank_num = $_POST["bank_num"];
    $i_user = $_POST["i_user"];

    $param = [
        "user_id" => $user_id ,
        "user_pw" => $user_pw ,
        "confirm_pw" => $confirm_pw ,
        "nm" => $nm ,
        "user_num" => $user_num ,
        "bank_nm" => $bank_nm ,
        "bank_num" => $bank_num ,
        "i_user" => $i_user
    ];

    $result = upd_info($param);
    if($result){
        header("location:main_page.php");
    }