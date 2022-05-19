<?php
    include_once "db.php";
    $i_board = $_GET['i_board'];
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
    <form action="del_pass_proc.php?i_board=<?=$i_board?>" method="post">
    <input type="hidden" name="i_board" value="<?=$i_board?>">
    <div>비밀번호를 입력해주세요.</div>
    <div><input type="password" name="pass"></div>
    <input type="submit" value="sub">
    </form>
</body>
</html>