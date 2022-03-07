<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">
    <title>管理者登録</title>
    <style type="text/css">
        #formWrap{
            width:75%;
            margin:0 auto;
            padding:5px 10px;
            color:#555;
            line-height:120%;
            font-size:90%;
            background-color:#DDD;
        }
        table.formTable{
            width:100%;
            margin:0 auto;
            border-collapse:collapse;
        }
        p{
            text-align:center;
        }
        input.bt{
            display:inline-block;
            text-align:center;
            font-size:100%;
            width:49%;
            height:40px;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div id="formWrap">
        <h3 style="text-align:center; margin:5%;">管理者登録</h3>
        <form method="post" action="blog_add_check.php" style="width:70%; margin:0 auto;">
            <p>新規管理者名　　：
            <input type="text" name="name" style="width:100px;" >
            </p>
            <p>パスワード　　　：
            <input type="password" name="pass" style="width:100px;" >
            <p>パスワード再入力：
            <input type="password" name="pass2" style="width:100px;" >
            </p><br />
            <input class="bt" type="button" onclick="history.back()" value="戻る">
            <input class="bt" type="submit" value="OK">
            <p></p>
        </form>
    </div>
</body>

</html>