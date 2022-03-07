<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">  
    <title>管理者編集実行</title>
</head>
<body>
    <?php


    try{
        $blog_id = $_POST['id'];
        $blog_name = $_POST['name'];
        $blog_pass = $_POST['pass'];

        $blog_name = htmlspecialchars($blog_name,ENT_QUOTES,'utf-8');
        $blog_pass = htmlspecialchars($blog_pass,ENT_QUOTES,'utf-8');


        $dsn = 'mysql:dbname=blog;host=localhost;charset=utf8';
        $user = 'root';
        $password = 'root';
        $dbh = new PDO($dsn,$user,$password);
    
        $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'UPDATE blog SET name=?,password=? WHERE id=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $blog_name;
        $data[] = $blog_pass;
        $data[] = $blog_id;
        $stmt->execute($data);
 
        $dbh = null; 

    
    }
    catch(Exception $e){
        print 'ただいま障害により大変ご迷惑をお掛けしております。';
        echo $e->getMessage().PHP_EOL;
        exit();
    }
    ?>
    修正しました。<br />
    <br />

    <a href="blog_list.php">戻る</href>
</body>
</html>