<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ユーザー編集チェック</title>
    <style></style>
</head>
<body>
    <?php
    
    $user_id = $_POST['id'];
    $user_name = $_POST['name'];
    $user_pw = $_POST['pass'];
    $user_pw2 = $_POST['pass2'];

    $user_name = htmlspecialchars($user_name,ENT_QUOTES,'UTF-8');
    $user_pw = htmlspecialchars($user_pw,ENT_QUOTES,'UTF-8');
    $user_pw2 = htmlspecialchars($user_pw2,ENT_QUOTES,'UTF-8');

    if($user_name == ''){
        print 'ユーザー名が入力されていません<br />';
    }
    else{
        print 'ユーザー名：';
        print $user_name;
        print '<br/>';
    }
    if($user_pw == ''){
        print 'パスワードが入力されていません<br />';
    }
    
    if($user_pw != $user_pw2){
        print 'パスワードが一致しません<br />';
    }
    if($user_name == '' || $user_pw == '' || $user_pw2 == ''){
        print '<form>';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '</form>';
    }
    else{
        $user_pw = md5($user_pw);
        print '<form method="post" action="user_edit_done.php">';
        print '<input type="hidden" name="id" value="'.$user_id.'">';
        print '<input type="hidden" name="name" value="'.$user_name.'">';
        print '<input type="hidden" name="pass" value="'.$user_pw.'">';
        print '<br/>';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '<input type="submit" value="OK">';
        print '</form>';
    }
    
    ?>
</body>
</html>