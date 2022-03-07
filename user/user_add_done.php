<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">  
    <title>ユーザー登録実行</title>
</head>
<body>
    <?php


    try{
        $user_name = $_POST['name'];
        $user_pass = $_POST['pass'];
        
        $user_name = htmlspecialchars($user_name,ENT_QUOTES,'utf-8');
        $user_pass = htmlspecialchars($user_pass,ENT_QUOTES,'utf-8');


        $dsn = 'mysql:dbname=user;host=localhost;charset=utf8';
        $user = 'root';
        $password = 'root';
        $dbh = new PDO($dsn,$user,$password);
    
        $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'INSERT INTO user(name,password) VALUES (?,?)';
        $stmt = $dbh->prepare($sql);
        $data[] = $user_name;
        $data[] = $user_pass;
        $stmt->execute($data);
 
        $dbh = null;       

        print $user_name;
        print 'さんを追加しました <br />';

    
    }
    catch(Exception $e){
        print 'ただいま障害により大変ご迷惑をお掛けしております。';
        echo $e->getMessage().PHP_EOL;
        exit();
    }
    ?>

    <a href="user_list.php">戻る</href>
</body>
</html>