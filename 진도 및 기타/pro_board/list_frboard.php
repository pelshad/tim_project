<?php
    include_once "db/db_board.php";
    session_start();
    $nm = "";    
    $page = 1;
    if(isset($_GET["page"])){
        $page = intval($_GET["page"]);
    }
    if(isset($_SESSION["login_user"])){
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }
    if(isset($_GET["paging"])){
        $paging = intval($_GET["paging"]);
    } else {
        $paging = 5;
    }
    $row_count = $paging;
    $param = [
        "row_count" => $row_count,
        "start_idx" => ($page - 1) * $row_count
    ];
    $paging_count = sel_paging_count($param);
    $list = sel_board_list($param);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" A href="list.css">
</head>

<body>
    <div id="container">
        <div class="header">
            header

        </div>

        <div class="id_box">
            <?php if(isset($_SESSION["login_user"])){ ?>
            <div><?=$nm?>님 환영합니다.</div>
            <a href="list_info.php">내 정보</a>
            <a href="logout.php">로그아웃</a>
            <?php } else { ?>
            <div class="unlogin">"site명"에 오신것을 환영합니다.</div>
            <a href="login.php">로그인</a>
            <a href="join.php">회원가입</a>
            <?php } ?>
        </div>

        <div class="menu">
            <ul>
                <a href="#" class="menu">
                    <li>공지사항</li>
                </a>
                <a href="list_frboard.php" class="menu">
                    <li>자유 게시판</li>
                </a>
                <a href="#" class="menu">
                    <li>사진 게시판</li>
                </a>
                <a href="#" class="menu">
                    <li>한줄 게시판</li>
                </a>
            </ul>
        </div>

        <div class="main">
            <h2 class="list">자유게시판</h2>
            <div class="write_list">
                <form action="list_frboard.php" method="get">
                    <select name="paging" onchange="this.form.submit()">
                        <option>글목록</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                    </select>
                </form>
            </div>
            
            <div class="table">
                <table>
                    <tr>
                        <th class="no">글번호</th>
                        <th class="title">제&nbsp&nbsp&nbsp&nbsp목</th>
                        <th class="nm">작성자</th>
                        <th class="created">작성일</th>
                        <th class="view">조회수</th>
                    </tr>
                    <?php foreach($list as $item){ ?>
                    <tr>
                        <td class="no"><?=$item["i_board"]?></td>
                        <td class="title"><a
                                href="list_detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a></td>
                        <td class="nm"><?=$item["nm"]?></td>
                        <td class="created"><?=$item["created_at"]?></td>
                        <td class="view"><?=$item["view_at"]?></td>
                    </tr>
                    <?php } ?>
                </table>
                <br>
                <div class="search_board">
                <form action="test_search_frboard.php" method="get">
                    <input type="text" name="s_title">
                    <input type="submit" value="찾기">
                </form>
                </div>
                <?php for($i=1; $i<=$paging_count; $i++) { ?>
                <span class="<?=$i===$page ? "pageSelected" : ""?>">
                    <a href="list_frboard.php?page=<?=$i?>" class="paging"><?=$i?></a>
                </span>
                <?php } ?>
                
                <div class="write"><a href="write.php">글쓰기</a></div>
            </div>
        </div>
    </div>
</body>

</html>