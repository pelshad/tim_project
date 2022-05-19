<?php
    include_once "db.php";
    $conn = get_conn();
    $i_board = $_GET['i_board'];

    $sql = "SELECT * FROM t_board2 WHERE i_board = $i_board";
    $result = mysqli_query($conn, $sql);
    

    if($row = mysqli_fetch_assoc($result)){
        $title = $row['title'];
        $ctnt = $row['ctnt'];
        $uname = $row['uname'];             
    }
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            display:block;
            width: 123px;
            height : 20px;
        }

        .mbox{
            margin:5px 5px;
        }
        textarea{
            width:300px;
            height:300px;
            resize:none;
        }

        .ibox{
            width:300px;
        }
    </style>
</head>
<body>
    <form action="mod_proc.php?i_board=<?=$i_board?>" method="post">
    <input type="hidden" name="i_board" value="<?=$i_board?>">
    <div class="mbox" > <div class="box">Title</div><input class="ibox" type="text" name="title" value="<?=$title?>"></div>
    <div class="mbox"> <div class="box"> USER ID</div>  <input class="ibox" type="text" name="uname" value="<?=$uname?>"></div>  
    <div class="mbox"><textarea name="ctnt"><?=$ctnt?></textarea></div>
    <input type="submit" value="MOD">
    </form>
    
</body>
</html>