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
    <h2>Write</h2>
    <form action="write_proc.php" method="post">
        <legend>
    <div class="mbox" > <div class="box">Title</div>   <input class="ibox" type="text" name="title" placeholder="TITLE"></div>
    <div class="mbox"> <div class="box"> USER ID</div>  <input class="ibox" type="text" name="uname" placeholder="USER NAME"></div>    
    <div class="mbox"> <div class="box"> PASSWORD</div> <input class="ibox" type="password" name="pw" placeholder="PASSWORD"></div>    
    <div class="mbox"><textarea name="ctnt" placeholder="CONTENT"></textarea></div>
    <input type="submit" value="SUB">
    <input type="reset" value="RESET">    
        </legend>
    </form>
</body>
</html>