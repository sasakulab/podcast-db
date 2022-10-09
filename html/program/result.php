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
</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT']."/lib/components/header.php"; ?>
    <div class="container">
        <div class="cover-container">
            <div class="row gx-5">
                <div class="col-md-4 float-md-start text-center">
                    <img src="../img/icon.jpg" alt="" class="p-4" style="object-fit: cover; border-radius: 10px" width="300px">
                </div>
                <div class="col-md-8 p-4">
                    <h2>Sasakulab Podcast</h2>
                    <hr class="w-100">
                    <p class="text-black-50">#Sasakulab</p>
                    <p>Sasakulab ポッドキャストは架空のポッドキャストです。主にこのサイトの情報はここから表示されます。</p>
                    <div class="p-2">
                        <a href="mailto:i@sasakulab.com" class="btn-mail">Mail</a>
                        <a href="https://sasakulab.com" class="btn-site">WebSite</a>
                        <a href="https://twitter.com/ayato_sasakura" class="btn-twitter">@ayato_sasakura</a>
                        <a href="rss.xml" class="btn-rss">RSS</a>
                    </div>
                    <div class="p-2">
                        <a href="https://apple.podcast.com/" class="btn-apple">Apple Podcast</a>
                        <a href="https://spotify.com" class="btn-spotify">Spotify</a>
                        <a href="https://podcast.google.com" class="btn-google">Google Podcast</a>
                        <a href="https://youtube.com" class="btn-youtube">YouTube</a>
                        <a href="https://nicovideo.jp" class="btn-nicovideo">ニコニコ動画</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-4">
        <h2 class="container">埋め込み</h2>
        <div class="card p-4" height="200px">
            <iframe src="https://anchor.fm/moshimoshiradio/embed/episodes/Ep-1-e1jgile" height="102px" width="400px" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>

    <footer class="mt-auto text-center text-black-50">
        <p>(C)2022 Sasakulab, サイト上の画像・イラスト・文言はすべて各クリエイターの著作物です。</p>
    </footer>
</body>

</html>