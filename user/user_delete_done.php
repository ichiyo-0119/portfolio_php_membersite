<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ユーザー削除実行</title>
    <style></style>
</head>
<body>
    <?php
    
    try{
        $user_id = $_POST['id'];
    
        $dsn = 'mysql:dbname=user;host=localhost;charset=utf8';
        $user = 'root';
        $password = 'root';

        $dbh = new PDO($dsn,$user,$password);
        $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'DELETE FROM user WHERE ID=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $user_id;
        $stmt -> execute($data);
    }
    catch(Exception $e){
        print 'ただいま障害により大変ご迷惑をお掛けしております。';
        exit();
    }
    ?>
    削除しました</br></br>
    <a href="user_list.php">戻る</href>
</body>
</html>