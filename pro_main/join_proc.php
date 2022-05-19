<?php
    include_once "db/db_user.php";
    $user_id = $_POST["user_id"];
    $upw = $_POST["user_pw"];
    $nm = $_POST["nm"];

    echo $user_id;
    echo $user_pw;
    echo $nm;

   $param = [
        "user_id" => $user_id,
        "user_pw" => $user_pw,
        "nm" => $nm
    ];

    $result = ins_user($param);
    header("location:loing_page.php");
    */