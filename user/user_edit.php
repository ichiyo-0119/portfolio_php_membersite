<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ユーザー修正</title>
    <style type="text/css">
        input.bt{
            display:inline-block;
            text-align:center;
            text-align:middle;                          
            font-size:18px;
            width:50px;
            height:25px;
            vertical-align: middle;
            margin-top:5px;
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
    ユーザー修正<br /><br />
    ユーザーID<br />
    <?php print $user_id;?>
    <br />
    <br />
    <form method="post" action="user_edit_check.php">
        <input type="hidden" name="id" value="<?php print $user_id;?>">
        ユーザー名<br />
        <input type="text" name="name" style="width:200px;" value=""><br />
        パスワードを入力してください<br />
        <input type="password" name="pass" style="width:100px;" value=""><br />
        パスワードをもう一度入力してください<br />
        <input type="password" name="pass2" style="width:100px;" value=""><br />
        <input class="bt" type="button" onclick="history.back()" value="戻る">
        <input class="bt" type="submit" value="OK" > 
    </form>

</body>
</html>