<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>下記の情報でよろしいでしょうか</p>
<form action="entry.php" method="post">
    氏名<p><?php echo $name?></p><br>
    ログインID<p><?php echo $loginid?></p><br>
    パスワード<p><?php echo $pass?></p><br>
    メールアドレス<p><?php echo $mail?></p><br>
    <input type="hidden" name = "name" value="<?php echo $name?>">
    <input type="hidden" name = "loginid" value="<?php echo $loginid?>">
    <input type="hidden" name = "pass" value="<?php echo $pass?>">
    <input type="hidden" name = "mail" value="<?php echo $mail?>">

    <input type="submit" value="登録">
</form>
<form action="tpl/entry.php">
    <input type="submit" value="戻る">
</form>
</body>
</html>