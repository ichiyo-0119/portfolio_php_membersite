<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理者リスト</title>
</head>
<body>
    <?php
    
    try{
        $dsn = 'mysql:dbname=manager;host=localhost;charset=utf8';
        $user = 'root';
        $password = 'root';

        //PDO(PHP Data Object)
        //PDOコンストラクタを作成
        $dbh = new PDO($dsn,$user,$password);

        //PDOインスタンスにアクセス
        $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //attibute:属性
        $sql = 'SELECT ID,name FROM manager WHERE 1'; //WHERE 1：全て

        $stmt = $dbh->prepare($sql);
        $stmt -> execute();

        $dbh = null;

        print '管理者一覧<br /><br />';

        print '<form method="post" action="manager_branch.php">';
        while(true){
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            if($rec==false){
                break;
            }
            print '<input type="radio" name="id" value="'.$rec['ID'].'">';
            print $rec['ID'];
            print '．';
            print $rec['name'];
            print '<br />';
        }
        print '<br />';
        print '<input type="submit" name="add" value="登録">';
        print '<input type="submit" name="edit" value="修正">';
        print '<input type="submit" name="delete" value="削除">';
        print '</form>';
    }
    catch(Exception $e){
        print 'ただいま障害により大変ご迷惑をお掛けしております。';
        exit();
    }
    
    ?>
</body>
</html>