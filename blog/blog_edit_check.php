<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理者編集チェック</title>
    <style></style>
</head>
<body>
    <?php
    
    $blog_id = $_POST['id'];
    $blog_name = $_POST['name'];
    $blog_pw = $_POST['pass'];
    $blog_pw2 = $_POST['pass2'];

    $blog_name = htmlspecialchars($blog_name,ENT_QUOTES,'UTF-8');
    $blog_pw = htmlspecialchars($blog_pw,ENT_QUOTES,'UTF-8');
    $blog_pw2 = htmlspecialchars($blog_pw2,ENT_QUOTES,'UTF-8');

    if($blog_name == ''){
        print '管理者名が入力されていません<br />';
    }
    else{
        print '管理者名：';
        print $blog_name;
        print '<br/>';
    }
    if($blog_pw == ''){
        print 'パスワードが入力されていません<br />';
    }
    
    if($blog_pw != $blog_pw2){
        print 'パスワードが一致しません<br />';
    }
    if($blog_name == '' || $blog_pw == '' || $blog_pw2 == ''){
        print '<form>';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '</form>';
    }
    else{
        $blog_pw = md5($blog_pw);
        print '<form method="post" action="blog_edit_done.php">';
        print '<input type="hidden" name="id" value="'.$blog_id.'">';
        print '<input type="hidden" name="name" value="'.$blog_name.'">';
        print '<input type="hidden" name="pass" value="'.$blog_pw.'">';
        print '<br/>';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print '<input type="submit" value="OK">';
        print '</form>';
    }
    
    ?>
</body>
</html>