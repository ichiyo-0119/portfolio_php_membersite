<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理者削除</title>
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
        $manager_id = $_GET['id'];

        $dsn = 'mysql:dbname=manager;host=localhost;charset=utf8';
        $user = 'root';
        $password = 'root';

        $dbh = new PDO($dsn,$user,$password);
        $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT name FROM manager WHERE ID=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $manager_id;
        $stmt -> execute($data);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $manager_name = $rec['name'];

        $dbh = null;

    }
    catch(Exception $e){
        print 'ただいま障害により大変ご迷惑をお掛けしております';
        exit();

    }
    ?>

    管理者削除<br />
    <br />
    管理者ID<br />
    <?php print $manager_id;?><br/>
    管理者名<br />
    <?php print $manager_name;?>
    <br />
    この管理者を削除して本当によろしいですか？<br />
    <br />
    <form method="post" action="manager_delete_done.php">
        <input type="hidden" name="id" value="<?php print $manager_id;?>">
        <input class="bt" type="button" onclick="history.back()" value="戻る">
        <input class="bt" type="submit" value="OK" > 
    </form>
</body>
</html>

