<?php
    include_once "db.php";    

    $i_board = $_POST['i_board'];
    $pass = $_POST['pass'];

    $conn = get_conn();
    $sql = "SELECT * FROM t_board2 WHERE i_board = $i_board";
    $result = mysqli_query($conn, $sql);
    
    
    if($row = mysqli_fetch_assoc($result)){
        $pw = $row['pw'];
        
    }

    if($pass === $pw){
        header("location:del_proc.php?i_board=$i_board");
    }
    else{
        echo "비밀번호를 틀렸습니다.";
    }

    echo "input : " . $pass . "<br>";
    echo "result : " . $pw . "<br>";
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="hidden" name="i_board" value="<?=$i_board?>">
</body>
</html>