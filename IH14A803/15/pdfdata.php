<?php
$cn = mysqli_connect('localhost','root','','wp41pdf');
//エンコードを指定
mysqli_set_charset($cn,'utf8');


$title = $_REQUEST['title'];
echo $title;


$result = mysqli_query($cn,"SELECT title,created_at FROM m_news where title = '$title'");

$tbl = array();

while($row = mysqli_fetch_assoc($result)){

    $tbl[] = $row;
}

mysqli_close($cn);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<?= $tbl['title']?>
<?= $tbl['created_at']?>
</body>
</html>
