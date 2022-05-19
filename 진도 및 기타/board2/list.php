<?php
    include_once "db.php";
    $conn = get_conn();
    $sql = "SELECT * FROM t_board2 ORDER BY i_board DESC";
    
    $result = mysqli_query($conn, $sql);
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
        th.no {
            width : 10px;
            text-align : center;
        }
        td.title{
            width : 300px;
            padding : 5px;
        }
        td.uname{
            width:100px;
            text-align : center;
        }

        td.create_at{
            width:100px;
            text-align : center;
        }

        td.hit{
            width:100px;
            text-align : center;
        }
    </style>
</head>
<body>
    <h2>List</h2>
    <table>
    <tr>
        <th class = "no">No</th>
        <th class = "title">Title</th>
        <th class = "user">USER</th>
        <th class = "date">DATE</th>
        <th class = "hit">VIEWS</th>
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)){
        $i_board = $row['i_board'];
        $title = $row['title'];
        $uname = $row['uname'];
        $create_at = $row['create_at'];
        $hit = $row['hit'];
        echo "<tr>";
        echo    "<td class='no'>$i_board</td>";
        echo    "<td class='title'><a href='detail.php?i_board=$i_board'>$title</a></td>";
        echo    "<td class='uname'>$uname</td>";
        echo    "<td class='date'>$create_at</td>";
        echo    "<td class='hit'>$hit</td>";
        echo "</tr>";
    }
    ?>
    </table>
    
    <form action="search_proc.php" method="post">
        <input type="text" name="board_search">
        <input type="submit" value="search">
    </form>
    <div><a href="write.php"><button>Write</button></a></div>
    

</body>
</html>