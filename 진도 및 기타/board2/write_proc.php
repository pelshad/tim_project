<?php
    include_once "db.php";
    $conn = get_conn();
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    $uname = $_POST['uname'];
    $pw = $_POST['pw'];

    $sql = "INSERT INTO t_board2
            (title, uname, pw, ctnt)
            VALUES
            ('${title}','${uname}','${pw}','${ctnt}')";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("location:list.php");

?>