<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">  
    <title>管理者編集実行</title>
</head>
<body>
    <?php


    try{
        $manager_id = $_POST['id'];
        $manager_name = $_POST['name'];
        $manager_pass = $_POST['pass'];

        $manager_name = htmlspecialchars($manager_name,ENT_QUOTES,'utf-8');
        $manager_pass = htmlspecialchars($manager_pass,ENT_QUOTES,'utf-8');


        $dsn = 'mysql:dbname=manager;host=localhost;charset=utf8';
        $user = 'root';
        $password = 'root';
        $dbh = new PDO($dsn,$user,$password);
    
        $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'UPDATE manager SET name=?,password=? WHERE id=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $manager_name;
        $data[] = $manager_pass;
        $data[] = $manager_id;
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

    <a href="manager_list.php">戻る</href>
</body>
</html>