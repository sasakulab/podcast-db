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
    <title>メンバー詳細 - ポッドキャスト部っ！</title>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <h1 class="fs-4">ポットキャスト部っ！</h1>
            </a>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link">Search</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Member</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Program</a></li>
                <li class="nav-item"><a href="#" class="nav-link">News</a></li>
                <li class="nav-item"><a href="#" class="nav-link active">Login</a></li>
            </ul>
        </header>
    </div>
    <div class="container">
        <div class="cover-container">
            <div class="row gx-5">
                <div class="col-md-4 float-md-start text-center">
                    <img src="../img/icon.jpg" alt="" class="rounded-circle" style="object-fit: cover;" width="250px">
                </div>
                <div class="col-md-8 p-4">
                    <h2>佐桜彩斗</h2>
                    <hr class="w-100">
                    <p class="text-black-50">@ayato_sasakura</p>
                    <p>ポッドキャストが好きです。</p>
                    <div class="p-1">
                        <a href="https://twitter.com/ayato_sasakura" class="btn-twitter">@ayato_sasakura</a>
                        <a href="mailto:i@sasakulab.com" class="btn-mail">Mail</a>
                        <a href="https://sasakulab.com" class="btn-site">WebSite</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-4">
        <h2 class="container p-4">参加しているポッドキャスト</h2>
        <div class="card p-2" height="200px">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 text-center">
                        <img src="../img/icon.jpg" alt="" style="object-fit: cover;" width="200px">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title">Sasakulab Podcast</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sasakulab Podcast</h6>
                        <p class="card-text"></p>
                        <a href="#" class="btn-listen">開く</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-auto text-center text-black-50">
        <p>(C)2022 Sasakulab, サイト上の画像・イラスト・文言はすべて各クリエイターの著作物です。</p>
    </footer>
</body>

</html>