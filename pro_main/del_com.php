<?php
    include_once "db/db_board.php";
    $i_com = $_GET["i_com"];
    $b_board = $_GET["i_board"];
    $i_board = $b_board;

    echo "i com : " . $i_com . "<BR>";
    echo "i board : " . $i_board;

$param = [
        "i_com" => $i_com,
        "i_board" => $i_board];

    $result = del_com($param);
    dn_comct($param);
    header("location:tip_detail.php?i_board=$i_board");