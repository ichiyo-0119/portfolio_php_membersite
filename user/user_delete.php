<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ユーザー削除</title>
    <style type="text/css">
        input.bt{
            display:inline-block;
            text-align: center;
            text-align: middle;                          
            font-size:16px;
            width:50px;
            height:25px;
            vertical-align: middle;
            margin-top:5px;
            padding:0 0;
        }
    </style>
</head>
<body>
    <?php

    try{
        $user_id = $_GET['id'];

        $dsn = 'mysql:dbname=user;host=localhost;charset=utf8';
        $user = 'root';
        $password = 'root';

        $dbh = new PDO($dsn,$user,$password);
        $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT name FROM user WHERE ID=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $user_id;
        $stmt -> execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_name = $rec['name'];

        $dbh = null;

    }
    catch(Exception $e){
        print 'ただいま障害により大変ご迷惑をお掛けしております';
        exit();

    }
    ?>

    ユーザー削除<br />
    <br />
    ユーザーID<br />
    <?php print $user_id;?><br/>
    ユーザー名<br />
    <?php print $user_name;?>
    <br />
    このユーザーを削除して本当によろしいですか？<br />
    <br />
    <form method="post" action="user_delete_done.php">
        <input type="hidden" name="id" value="<?php print $user_id;?>">
        <input class="bt" type="button" onclick="history.back()" value="戻る">
        <input class="bt" type="submit" value="OK" > 
    </form>
</body>
</html>

