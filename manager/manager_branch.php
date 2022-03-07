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
        header('Location: manager_add.php');
    }

    if(isset($_POST['edit'])==true){

        if(isset($_POST['id'])==false){
            header('Location: manager_ng.php');
            exit;
        }
        $manager_id = $_POST['id'];
        header('Location: manager_edit.php?id='.$manager_id);
        exit();
    }
    if(isset($_POST['delete'])==true){
        if(isset($_POST['id'])==false){
            header('Location: manager_ng.php');
            exit;
        }
        $manager_id = $_POST['id'];
        header('Location: manager_delete.php?id='.$manager_id);
        exit();
    }
    
    ?>
</body>
</html>