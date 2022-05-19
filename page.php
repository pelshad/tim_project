<?php
    /*board list*/
    php
    include_once "db/db_board.php";
    session_start();
    $page = 1;
    if(isset($_GET["page"])){
        $page = intval($_GET["page"]);
    }
    $row_count = 10;
    $param = [
        "row_count" => $row_count,
        "start_idx" => ($page - 1) * $row_count
    ];
    $list = sel_board_list($param)
    $paging_count = paging_count($param);

    http
    <div class="page">
    <?php for($i=1; $i<=$paging_count; $i++) { ?>
    <span class="<?=$i===$page ? "pageSelected" : ""?>">
    <a href="tip_board.php?page=<?=$i?>"><?=$i?></a>
    </span>
    <?php } ?>
    </div>


    /* DB */
    function sel_board_list($param){
        $conn = get_conn();
        $row_count = $param["row_count"];
        $start_idx = $param["start_idx"];
        $sql = "SELECT * FROM t_board A
                INNER JOIN t_user B
                ON A.i_user = B.i_user
                LIMIT $start_idx, $row_count";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function paging_count($param){
        $conn = get_conn();
        $row_count = $param["row_count"];
        $sql = "SELECT CEIL(COUNT(i_board) / $row_count) as cnt
                FROM t_board A
                INNER JOIN t_user B
                ON A.i_user = B.i_user";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $row = mysqli_fetch_assoc($result);
        return $row["cnt"];
    }