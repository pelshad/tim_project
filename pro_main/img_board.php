<?php
    include_once "db/db_board.php";
    session_start();

    if(isset($_SESSION["login_user"])){
    $login_user = $_SESSION["login_user"];
    $nm = $login_user["nm"];}

    $page = 1;
    if(isset($_GET["page"])){
        $page = intval($_GET["page"]);
    }

    $row_count = 12;
    $param = [
        "row_count" => $row_count,
        "start_idx" => ($page - 1) * $row_count
    ];

    $paging_count = img_paging_count($param);
    $list = sel_img_list($param);
    $notice = top_notice();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>리스트</title>
  <link rel="stylesheet" href="css/board_list.css">
  <link rel="stylesheet" href="css/img_board.css">
</head>
<body>
<div id="board_body">
    <header>
    <?php include_once "header.php" ?>
    </header>

    <section>
      <div class="contents">
      <h2 class="title">반려식물</h2>
      <!-- 공지사항 -->
      <table>
      <tr class="tr_line">
                <th width="80px">글번호</th>
                <th width="500px">제&nbsp&nbsp&nbsp&nbsp목</th>
                <th width="100px">작성자</th>
                <th width="180px">작성일</th>
                <th width="90px">조회수</th>
            </tr>
        <?php foreach($notice as $item){ ?>
                <tr>
                    <td class="notice">공지</td>
                    <td class="title notice"><a href="tip_detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a>
                    <?php if(!$item["c_cnt"] == 0){?>
                      <span class="cnt">[<?=$item["c_cnt"]?>]</span> 
                    <?php } ?></td>
                    <td class="notice"><?=$item["nm"]?></td>
                    <td class="notice"><?=$item["created_at"]?></td>
                    <td class="notice"><?=$item["view_at"]?></td>
                </tr>
            <?php } ?>
      </table>
      <br>
      <!--이미지게시판 리스트-->
    <fieldset>
      <div class="img_ul">
            <?php foreach($list as $item){ ?>
                <ul>
                    <li class="img">
                    <a href="tip_detail.php?i_board=<?=$item["i_board"]?>">

                    <?php if(!$item["img_board"]){?>
                      <img class="size_40" src="img/icon1.png">
                    <?php } else{ ?>
                        <img class="board_img size_40" src="img/board/<?=$item["img_board"]?>">
                        <br>
                    <?php } ?>
                    
                    </a>
                    </li>
                    <hr>
                    <li class="title"><a href="tip_detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a>
                    <?php if(!$item["c_cnt"] == 0){?>
                      <span class="cnt">[<?=$item["c_cnt"]?>]</span> 
                    <?php } ?></li>
                    <li class="nm"><?=$item["nm"]?></li>
                    <li class="cre"><?=$item["created_at"]?></li>
                    <li class="view"><span>View</span><?=$item["view_at"]?></li>
                </ul>
            <?php } ?>
        </div>
    </fieldset>
    <!-- 페이징 -->
        <div class="page">
           <?php for($i=1; $i<=$paging_count; $i++) { ?>
            <span class="<?=$i===$page ? "pageSelected" : ""?>">
            <a href="img_board.php?page=<?=$i?>"><?=$i?></a>
            </span>
           <?php } ?>
       </div>
       <div class="write"><input class="sub" type="button" value="글쓰기" onclick="location.href='write.php'"></div>
      </div>

      <?php include_once "menubar.php";?>
 
    
    </section>
  </div>
  
</body>
</html>