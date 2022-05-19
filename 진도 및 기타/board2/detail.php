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

    if(isset($_GET['i_board'])){
        $view_sql = "UPDATE t_board2 set hit = hit + 1 where i_board = {$i_board}";
        mysqli_query($conn, $view_sql);
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
<div class="mbox" > <div class="box">Title</div><input class="ibox" type="text" name="title" readonly value="<?=$title?>"></div>
    <div class="mbox"> <div class="box"> USER ID</div>  <input class="ibox" type="text" name="uname" readonly value="<?=$uname?>"></div>  
    <div class="mbox"><textarea readonly name="ctnt"><?=$ctnt?></textarea></div>
    <a href="mod_pass.php?i_board=<?=$i_board?>"><button>MOD</button></a>
    <a href="del_pass.php?i_board=<?=$i_board?>"><button>DEL</button></a>
    <a href="list.php"><button>LIST</button></a>
</body>
</html>