<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理者削除実行</title>
    <style></style>
</head>
<body>
    <?php
    
    try{
        $blog_id = $_POST['id'];
    
        $dsn = 'mysql:dbname=blog;host=localhost;charset=utf8';
        $user = 'root';
        $password = 'root';

        $dbh = new PDO($dsn,$user,$password);
        $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'DELETE FROM blog WHERE ID=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $blog_id;
        $stmt -> execute($data);
    }
    catch(Exception $e){
        print 'ただいま障害により大変ご迷惑をお掛けしております。';
        exit();
    }
    ?>
    削除しました</br></br>
    <a href="blog_list.php">戻る</href>
</body>
</html>