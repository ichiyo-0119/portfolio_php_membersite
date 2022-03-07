<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理者編集チェック</title>
    <style></style>
</head>
<body>
    <?php
    
    $manager_id = $_POST['id'];
    $manager_name = $_POST['name'];
    $manager_pw = $_POST['pass'];
    $manager_pw2 = $_POST['pass2'];

    $manager_name = htmlspecialchars($manager_name,ENT_QUOTES,'UTF-8');
    $manager_pw = htmlspecialchars($manager_pw,ENT_QUOTES,'UTF-8');
    $manager_pw2 = htmlspecialchars($manager_pw2,ENT_QUOTES,'UTF-8');

    if($manager_name == ''){
        print '管理者名が入力されていません<br />';
    }
    else{
        print '管理者名：';
        print $manager_name;
        print '<br/>';
    }
    if($manager_pw == ''){
        print 'パスワードが入力されていません<br />';
    }
    
    if($manager_pw != $manager_pw2){
        print 'パスワードが一致しません<br />';
    }
    if($manager_name == '' || $manager_pw == '' || $manager_pw2 == ''){
        print '<form>';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '</form>';
    }
    else{
        $manager_pw = md5($manager_pw);
        print '<form method="post" action="manager_edit_done.php">';
        print '<input type="hidden" name="id" value="'.$manager_id.'">';
        print '<input type="hidden" name="name" value="'.$manager_name.'">';
        print '<input type="hidden" name="pass" value="'.$manager_pw.'">';
        print '<br/>';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '<input type="submit" value="OK">';
        print '</form>';
    }
    
    ?>
</body>
</html>