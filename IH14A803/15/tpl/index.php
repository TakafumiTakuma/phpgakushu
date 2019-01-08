<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<header>
    <img src="./images/logo.png" alt="ロゴ" width="145px" height="23px">
    <ul>
        <li>ホーム</li>
        <li>会社情報</li>
        <li>商品情報</li>
        <li>採用情報</li>
        <li>お問い合わせ</li>
        <li>サンプル</li>
    </ul>
</header>

<img src="images/photo01.jpg" alt="画像1">

<h1>新着情報</h1>
<ul>
<?php for($i = 0; $i < count($tbl); $i++) { ?>
    <li><a href="pdf.php?id=<?php echo $tbl[$i]['id']?>"><?php echo $tbl[$i]['title']?><?php echo $tbl[$i]['created_at']?></a></li>
<?php } ?>
</ul>
<dl>
    <img src="images/photo.png">
    <dt>商品名</dt>
    <dt>紹介文</dt>
    <img src="images/photo.png">
    <dt>商品名</dt>
    <dt>紹介文</dt>
    <img src="images/photo.png">
    <dt>商品名</dt>
    <dt>紹介文</dt>
    <img src="images/photo.png">
    <dt>商品名</dt>
    <dt>紹介文</dt>
</dl>

<h3>見出しh3タグ</h3>
<ul>
    <li>リスト1</li>
    <li>リスト2</li>
    <li>リスト3</li>
    <li>リスト4</li>
    <li>リスト5</li>
</ul>
<h3>h3タグ</h3>
<ul>
    <p>サブコンテンツはバナーを掲載するのに便利です。 ulタグに「class="bnr"とすれば、きれいに画像が並びます。</p>
    <li><img src="images/banner.png"></li>
    <li><img src="images/banner.png"></li>
    <li><img src="images/banner.png"></li>
    <li><img src="images/banner.png"></li>
    <li><img src="images/banner.png"></li>
</ul>
<footer>
    <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">会社情報</a></li>
        <li><a href="#">商品情報</a></li>
        <li><a href="#">採用情報</a></li>
        <li><a href="#">サイトポリシーについて</a></li>
        <li><a href="#">プライバシーポリシーについて</a></li>
        <li><a href="#">お問い合わせ</a></li>
        <li><a href="#">サイトマップ</a></li>
    </ul>

    <div id="foo">
        <address>Copyright&copy; 20XX - 20XX SITENAME All Rights Reserved.</address>
    </div>
</footer>
</body>
</html>