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
        header('Location: blog_add.php');
    }

    if(isset($_POST['edit'])==true){

        if(isset($_POST['id'])==false){
            header('Location: blog_ng.php');
            exit;
        }
        $blog_id = $_POST['id'];
        header('Location: blog_edit.php?id='.$blog_id);
        exit();
    }
    if(isset($_POST['delete'])==true){
        if(isset($_POST['id'])==false){
            header('Location: blog_ng.php');
            exit;
        }
        $blog_id = $_POST['id'];
        header('Location: blog_delete.php?id='.$blog_id);
        exit();
    }
    
    ?>
</body>
</html>