<?php
    include_once "db.php";
    $conn = get_conn();   
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
<h2>Search result</h2>
    <table>
    <tr>
        <th class = "no">No</th>
        <th class = "title">Title</th>
        <th class = "user">USER</th>
        <th class = "date">DATE</th>
        <th class = "hit">VIEWS</th>
    </tr>
    <?php
    if(isset($_POST['board_search']) && $_POST['board_search'] != NULL){
        $userID = $_POST['board_search'];
        $sql = "SELECT * FROM t_board2 where uname like '$userID'";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
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
        }
        else{            
        echo "<script>alert('사용자가 존재하지 않습니다.')</script>";
        }
    } 
        else{        
        echo "<script>alert('검색어를 입력해주세요.')</script>";
        }


    ?>
    </table>
</body>
</html>