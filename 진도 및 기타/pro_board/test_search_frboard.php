<?php
    include_once "db/db_board.php";
    $s_title = $_GET["s_title"];
    echo $s_title;

    $param = [
        "s_title" => $s_title
    ];
    echo $result["title"];
    