<?php
    include_once "db/db_board.php";
    session_start();

    $i_board = $_GET["i_board"];
    $title = $_GET["title"];
    $ctnt = $_GET["ctnt"];
    $param = [
        "i_board" => $i_board,
        "title" => $title,
        "ctnt" => $ctnt,
    ];

    $result = mod_board($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
