<?php
    include_once "db/db_board.php";
    session_start();

    if(isset($_SESSION["login_user"])){
    $login_user = $_SESSION["login_user"];
    $nm = $login_user["nm"];
    $i_user = $login_user["i_user"];}

    $param = [
        "i_user" => $i_user
    ];

    $list = uid_tip_list($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>리스트</title>
  <link rel="stylesheet" href="css/board_list.css">
</head>
<body>
<div id="board_body">
    <header>
      <?php include_once "header.php" ?>
    </header>

    <section>
      <div class="contents">
      <h2 class="title">나만의 꿀팁</h1>
      <!--페이징 목록-->
      <div class="select_box">
      <form action="tip_board.php" method="get">
        <select name="rc" onchange="this.form.submit()">
          <option value="">글목록</option>
          <option value="5">5개씩</option>
          <option value="10">10개씩</option>
          <option value="15">15개씩</option>
        </select>
      </form>
      </div>
      
      <table>
            <tr class="tr_line">
                <th width="80px">글번호</th>
                <th width="500px">제&nbsp&nbsp&nbsp&nbsp목</th>
                <th width="100px">작성자</th>
                <th width="180px">작성일</th>
                <th width="90px">조회수</th>
            </tr>
            <!--공지사항-->
            <?php foreach($notice as $item){ ?>
                <tr>
                    <td class="notice">공지</td>
                    <td class="title notice"><a href="tip_detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a>
                    <?php if(!$item["c_cnt"] == 0){?>
                      <span class="cnt">[<?=$item["c_cnt"]?>]</span> 
                    <?php } ?> 
                    <td class="notice"><?=$item["nm"]?></td>
                    <td class="notice"><?=$item["created_at"]?></td>
                    <td class="notice"><?=$item["view_at"]?></td>
                </tr>
            <?php } ?>
            <!--팁게시판-->
            <?php foreach($list as $item){ ?>
                <tr>
                    <td><?=$item["i_board"]?></td>
                    <td class="title"><a href="tip_detail.php?i_board=<?=$item["i_board"]?>"><?=$item["title"]?></a>
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
        <!--페이징-->
        <div class="page">
           <?php for($i=1; $i<=$paging_count; $i++) { ?>
            <span class="<?=$i===$page ? "pageSelected" : ""?>">
            <a href="tip_board.php?page=<?=$i?>"><?=$i?></a>
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