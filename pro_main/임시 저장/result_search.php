<?php
    include_once "db/db_board.php";
    $cat = $_GET["cat"];
    $search = $_GET["search"];
    $sel_board = $_GET["sel_board"];

    if($sel_board == '0'){
        $board = '나만의 꿀팁';
    } else if($sel_board == '1'){
        $board = '반려식물';
    } else{
        $board = '공지사항';
    }

    if($cat === 'title'){
        $keyword = '제목';
    } else if($cat === 'nm'){
        $keyword = '작성자';
    }
    $param = [
        "cat" => $cat,
        "search" => $search,
        "sel_board" => $sel_board
    ];
    $list = sea_board($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/board_list.css">
</head>


<body>
<div id="board_body">
        <header>
            <?php include_once "header.php" ?>
        </header>

        <section>
        <div class="contents">
    <h2>[<?=$board?>] 게시판에서 [<?=$keyword?>]으로 '<?=$search?>'를 검색한 결과</h2>

    <table>
    <tr class="tr_line">
        <th width="80px">글번호</th>
        <th width="500px">제&nbsp&nbsp&nbsp&nbsp목</th>
        <th width="100px">작성자</th>
        <th width="180px">작성일</th>
        <th width="90px">조회수</th>
    </tr>
    <?php
    foreach($list as $item){?>
        <tr>
        <td><?=$item["i_board"]?></td>
        <td class="title"><a
            href="tip_detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a>
            <?php if(!$item["c_cnt"] == 0){?>
            <span class="cnt">[<?=$item["c_cnt"]?>]</span>
            <?php } ?>
        </td>
        <td><?=$item["nm"]?></td>
        <td><?=$item["created_at"]?></td>
        <td><?=$item["view_at"]?></td>
        </tr>
        <?php } ?>

    </table>
            </div>
            <?php include_once "menubar.php";?>
    </section>
    
</div>
</body>
</html>