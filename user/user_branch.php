<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>分岐画面</title>
    <style></style>
</head>
<body>
    <?php
    if(isset($_POST['add'])==true){
        header('Location: user_add.php');
    }

    if(isset($_POST['edit'])==true){

        if(isset($_POST['id'])==false){
            header('Location: user_ng.php');
            exit;
        }
        $user_id = $_POST['id'];
        header('Location: user_edit.php?id='.$user_id);
        exit();
    }
    if(isset($_POST['delete'])==true){
        if(isset($_POST['id'])==false){
            header('Location: user_ng.php');
            exit;
        }
        $user_id = $_POST['id'];
        header('Location: user_delete.php?id='.$user_id);
        exit();
    }
    
    ?>
</body>
</html>