<?php
    include_once "db.php";
    $conn = get_conn();
    $i_board = $_GET['i_board'];

    $sql = "DELETE FROM t_board2
            WHERE i_board = $i_board";

    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:list.php");



?>