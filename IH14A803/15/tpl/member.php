<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<form action="../member.php" method="post" enctype="multipart/form-data">
    氏名<?php ?><br>
    パスワード<input type="text" name="pass"><br>
    画像<input type="file" name="up_file">
    <input type="submit" value="登録">
</form>
</body>
</html>