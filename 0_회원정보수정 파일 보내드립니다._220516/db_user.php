<?php
    include_once "db/db_conn.php";

    function ins_user(&$param){
        $conn = get_conn();
        $user_id = $param["user_id"];
        $user_pw = $param["user_pw"];
        $nm = $param["nm"];
        $user_num = $param["user_num"];
        $sql = "INSERT INTO t_user
                (user_id, user_pw, nm, user_num )
                VALUES
                ('$user_id', '$user_pw', '$nm', '$user_num')";
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


    // 회원정보 수정페이지

    function upd_info(&$param) {
        $conn = get_conn();
        $user_id = $param["user_id"];
        $user_pw = $param["user_pw"];
        $confirm_pw = $param["confirm_pw"];
        $nm = $param["nm"];
        $user_num = $param["user_num"];
        $bank_nm = $param["bank_nm"];
        $bank_num = $param["bank_num"];
        $i_user = $param["i_user"];

        $sql = 
        "   UPDATE t_user 
               SET user_id = '$user_id'
               , user_pw = '$user_pw'
               , confirm_pw = '$confirm_pw'
               , nm = '$nm'
               , user_num ='$user_num'
               , bank_nm = '$bank_nm'
               , bank_num = '$bank_num'
               , updated_at = now()
            WHERE i_user = $i_user    
        ";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
    
// 프로필사진     
 function upd_profile_img(&$param) {
    $sql = "UPDATE t_user 
               SET profile_img = '{$param["profile_img"]}' 
             WHERE i_user = {$param["i_user"]}";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
 }
