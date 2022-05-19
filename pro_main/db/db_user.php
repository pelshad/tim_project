<?php
    include_once "db/db_conn.php";

    function ins_user(&$param){
        $conn = get_conn();
        $user_id = $param["user_id"];
        $user_pw = $param["user_pw"];
        $nm = $param["user_nm"];
        $gender = $param["gender"];
        $sql = "INSERT INTO t_user
                (user_id, user_pw, user_nm, gender)
                VALUES
                ('$user_id', '$user_pw', '$nm', '$gender')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_user(&$param){
        $conn = get_conn();
        $user_id = $param["user_id"];
        $user_pw = $param["user_pw"];
        $sql = "SELECT * from t_user
                WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return mysqli_fetch_assoc($result);
    }

