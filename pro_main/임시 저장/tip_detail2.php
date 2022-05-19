<?php
    include_once "db/db_board.php";
    session_start();
    
    if(isset($_SESSION["login_user"])){
    $login_user = $_SESSION["login_user"];
    $nm = $login_user["nm"];}

    $i_board = $_GET["i_board"];
    $param = [
        "i_board" => $i_board
    ];

    $result = sel_board($param);
    $view_up = view_up($param);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
    <link rel="stylesheet" href="css/board_list.css">
    <link rel="stylesheet" href="css/detail.css">
</head>

<body>
    <div id="board_body">
        <header>
            <div class="top">
                <h1 class="top_logo"><a href="main_page.php">베란다가든</a></h1>
                <div class="top_menu">
                    <!--로그인 상태에 따라 다르게-->
                    <?php if(isset($_SESSION["login_user"])){?>
                    <a href="#">내정보</a>
                    <a href="write.php">글쓰기</a>
                    <a href="logout.php">로그아웃</a>
                    <?php } else {?>
                    <a href="login_page.php">로그인</a>
                    <a href="join_page.php">회원가입</a>
                    <?php } ?>
                </div>
            </div>
            <div class="top_bn">
                <!--이미지-->
            </div>
        </header>

        <section>
            <div class="contents">
                <fieldset class="detail">
                    <div>
                        <div class="title"><?=$result["title"]?></div>
                        <div class="nm"><?=$result["nm"]?></div>
                        <div class="created_at">
                            <?=$result["created_at"]?>
                            <?=$result["view_at"]?>
                        </div>
                    </div>
                    <hr>
                    <div class="ctnt" name="ctnt">
                    <?php if(!$result["img_board"]){
                    } else{ ?>
                        <img class="board_img" src="img/board/<?=$result["img_board"]?>">
                        <br>
                    <?php } ?>
                        <?=$result["ctnt"]?>
                    </div>
                    <hr>
                    <div class="button_end">
                    <input class="sub" type="button" value="목록" onClick="location.href='tip_board.php'"></a>
                    <?php if(isset($_SESSION["login_user"])){ ?>
                    <?php if($result["i_user"] === $login_user["i_user"]){ ?>
                    <input class="sub" type="button" value="수정"
                        onClick="location.href='tip_mod.php?i_board=<?=$i_board?>'"></a>
                    <input class="sub" type="button" value="삭제"
                        onClick="location.href='tip_del.php?i_board=<?=$i_board?>'"></a>
                    <?php } ?>
                    <?php } ?>
                    </div>
                </fieldset>
            </div>

            <?php include_once "menubar.php";?>


        </section>
    </div>

</body>

</html>