<?php //headerの読み込み
include(dirname(__FILE__).'/../header.php'); 
?>

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

    print '<h3>管理者一覧</h3>';

    print '<form method="post" action="manager_branch.php">';
    print '<table style="border-collapse:collapse; border:solid 2px #555; width:250px;">';
    print '<tr>';
    print '<th style="border: dashed 1px #555;">選択</th>';
    print '<th style="border: dashed 1px #555; padding:8px,4px;">ID</th>';
    print '<th style="border: dashed 1px #555; padding:8px,4px;">名前</th>';
    print '</tr>';
    while(true){
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if($rec==false){
            break;
        }
        print '<tr>';
        print '<td style="border: dashed 1px #555; text-align:center;"><input type="radio" name="id" value="'.$rec['ID'].'"></td>';
        print '<td style="border: dashed 1px #555; text-align:center;">'.$rec['ID'].'</td>';
        print '<td style="border: dashed 1px #555; text-align:left; padding-left:16px;">'.$rec['name'].'</td>';
        print '<tr/>';
    }
    print '</table>';
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

<?php //footerの読み込み
include(dirname(__FILE__).'/../footer.php'); 
?>