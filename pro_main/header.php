<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
<div class="top">
                <h1 class="top_logo"><a href="main_page.php">베란다가든</a></h1>
                <div class="top_menu">
                    <!--로그인 상태에 따라 다르게-->
                    <?php if(isset($_SESSION["login_user"])){?>
                    <button><a href="#">내정보</a></button>
                    <button><a href="write.php"> 글쓰기</a></button>
                    <button><a href="logout.php">로그아웃</a></button>
                    <?php } else {?>
                    <button><a href="login_page.php">로그인</a></button>
                    <button><a href="join_page.php">회원가입</a></button>
                    <?php } ?>
                </div>
            </div>
            <div class="top_bn">
                <!--이미지-->
            </div>
</body>
</html>