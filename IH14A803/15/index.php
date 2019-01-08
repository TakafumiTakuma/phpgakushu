<?php
require_once dirname(__DIR__) . '../../config.php';

$db = DB;
$dbhost = DB_HOST;
$dbuser = DB_USER;
$dbpass = DB_PASS;

$cn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
//エンコードを指定
mysqli_set_charset($cn,'utf8');

$sql = "select id, title , created_at from m_news order by created_at desc ";

$result = mysqli_query($cn,$sql);

$tbl = array();

while($row = mysqli_fetch_assoc($result)){
    $tbl[] = $row;
}

mysqli_close($cn);

require_once ("tpl/index.php");
?>