<?php
    include_once "db.php";
    /* fr_board */
    function sel_board_list(&$param){
        $start_idx = $param["start_idx"];
        $row_count = $param["row_count"];
        $conn=get_conn();
        $sql="SELECT A.i_board, A.i_user, A.title, A.created_at, A.view_at, B.nm
              FROM t_board A
              INNER JOIN t_user B
              ON A.i_user = B.i_user
              ORDER BY i_board DESC
              LIMIT $start_idx, $row_count";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    /* fr_board_list_page */
        function sel_paging_count(&$param){
            $row_count = $param["row_count"];
            $sql = "SELECT CEIL(COUNT(i_board) / $row_count) as cnt
                    FROM t_board";
            $conn = get_conn();
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);
            $row = mysqli_fetch_assoc($result);
            return $row["cnt"];
        }

    /* view_up */
    function view_plus(&$param){
        $conn = get_conn();
        $i_board = $param["i_board"];
        $sql = "UPDATE t_board
                SET view_at = view_at + 1
                where i_board = $i_board";
        $result = mysqli_query($conn, $sql);   
        mysqli_close($conn);
        return $result;
    }
    /* write */
    function ins_board(&$param){
        $conn=get_conn();
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        $i_user = $param["i_user"];
        $sql="INSERT INTO t_board
              (title, ctnt, i_user)
              VALUES
              ('$title', '$ctnt', '$i_user')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    /* detail */
    function sel_board(&$param){
        $conn = get_conn();
        $i_board = $param["i_board"];
        $sql="SELECT A.i_board, A.i_user, A.title, A.created_at,
                     A.view_at, A.ctnt, B.nm
              FROM t_board A
              INNER JOIN t_user B
              ON A.i_user = B.i_user
              WHERE i_board = '$i_board'";           
        $result = mysqli_query($conn, $sql);   
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }
    
    /* delete */
    function del_board(&$param){
        $conn = get_conn();
        $i_board = $param["i_board"];
        $i_user = $param["i_user"];

        $sql = "DELETE FROM t_board
                WHERE i_board = '$i_board'
                AND i_user='$i_user'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    /* board_search */
    function find_board(&$param){
        $s_title = $param["s_title"];
        $conn = get_conn();
        $sql = "SELECT *
                FROM t_board 
                WHERE title 
                like '$s_title'";
        $result = mysqli_query($conn, $sql);
        return mysqli_fetch_query($result);
        
    }