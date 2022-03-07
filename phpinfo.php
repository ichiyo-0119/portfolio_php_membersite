<!DOCTYPE html>
<html lang="ja" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <title>LP試作版</title>

    <script type="module">
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>
    
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/print.css" media="print">

    <meta name="description" content="ページの説明文">
    <meta property="og:title" content="ページのタイトル">
    <meta property="og:description" content="ページの説明文">
    <meta property="og:image" content="https://mywebsite.com/image.jpg">
    <meta property="og:image:alt" content="画像の説明文">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:url" content="https://mywebsite.com/page">
    <link rel="canonical" href="https://mywebsite.com/page">

    <link rel="icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="/my.webmanifest">
    <meta name="theme-color" content="#FF00FF">
</head>

<body>
    <!-- コンテンツ -->
    <header>

    </header>
    <p>aaaann</p>
    <script src="/assets/js/xy-polyfill.js" nomodule></script>
    <script src="/assets/js/script.js" type="module"></script>

    <p>aaa</p>

    <?php
    if (isset($_POST['onamae']) && $_POST['onamae'] != '') {
        $x = htmlspecialchars($_POST['onamae']);
        echo "<p>こんにちは，$x さん。</p>";
    }
    ?>
    <form action="phpinfo.php" method="post">
        <p>お名前: <input name="onamae" size="20"></p>
    </form>

    <footer>

    </footer>
</body>
</html>
