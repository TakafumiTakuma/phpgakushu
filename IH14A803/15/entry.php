<?php
require_once dirname(__DIR__) . '../../config.php';

$name = $_POST['name'];
$loginid = $_POST['loginid'];
$hashloginid = md5($loginid);
$pass = md5($_POST['pass']);
$mail = $_POST['mail'];

//echo $name.'<br>';
////echo $loginid.'<br>';
////echo $pass.'<br>';
////echo $mail.'<br>';

$db = DB;
$dbhost = DB_HOST;
$dbuser = DB_USER;
$dbpass = DB_PASS;
$url = BASE_URL;
$frommail = FROM;

$cn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
//エンコードを指定
mysqli_set_charset($cn,'utf8');



$sql = "INSERT INTO `m_user` (`id`, `name`, `mail`,`login_id`,`password`,`hash_login_id`) VALUES ('', '$name', '$mail','$loginid','$pass','$hashloginid')";

mysqli_query($cn,$sql);

mysqli_close($cn);

mb_language('ja');
mb_internal_encoding('UTF-8');

$mailto = $mail;
$subject ='こんにちは';
$content ='http://localhost/IH14A803/member.php?id='.$hashloginid;
$header ='From:'.mb_encode_mimeheader('本登録はこちらから').'<'.$frommail.'>';

mb_send_mail($mailto,$subject,$content,$header);





require_once ("tpl/entryend.php");
?>

