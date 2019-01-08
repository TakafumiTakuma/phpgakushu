<?php
require_once dirname(__DIR__) . '../../config.php';
$db = DB;
$dbhost = DB_HOST;
$dbuser = DB_USER;
$dbpass = DB_PASS;

$pass = md5($_POST['pass']);

$dir = 'images/user';
$file_path = $dir.$_FILES["up_file"]["name"];
move_uploaded_file($_FILES["up_file"]["tmp_name"],$file_path);


$cn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
//エンコードを指定
mysqli_set_charset($cn,'utf8');

$result = mysqli_query($cn,"SELECT * FROM `m_user` WHERE pass = '$pass'");

$tbl = array();

while($row = mysqli_fetch_assoc($result)){
    $tbl[] = $row;
}


var_dump($tbl);

mysqli_close($cn);

if($result){

    $sql = "UPDATE  m_user SET user_state = 1 where pass = '$pass'";

    mysqli_query($cn,$sql);
}else{
    require_once ('tpl/member.php');
}

