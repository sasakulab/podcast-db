<?php
    include $_SERVER['DOCUMENT_ROOT'] . "/lib/components/autocss.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/lib/components/sql.php";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>番組詳細 - ポッドキャスト部っ！</title>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT']."/lib/components/header.php"; ?>
    <div class="container">
        <div class="row">
            <h1 class="text-center p-3">NEWS</h1>
            <h2>Sasakulab Podcast 配信開始のお知らせ</h2>
            <hr>
            <div class="row">
                <p class="text-black-50 col-sm-6">Sasakulab Podcast</p>
                <p class="text-black-50 col-sm-6" style="text-align: right;">2022/10/09 15:55</p>
            </div>
            <div id="content"></div>
            <script>
            document.getElementById('content').innerHTML = marked.parse("# クソデカ見出し\n text is **here**. よく[来た](google.com)ね、__帰れ__");
            </script>
        </div>
        <div>
            <a href="" class="btn-tag">タグ1</a>
            <a href="" class="btn-tag">タグ2</a>
            <a href="" class="btn-tag">タグ3</a>
        </div>
    </div>
    <footer class="mt-auto text-center text-black-50 p-4">
        <p>(C)2022 Sasakulab, サイト上の画像・イラスト・文言はすべて各クリエイターの著作物です。</p>
    </footer>
</body>
</html>