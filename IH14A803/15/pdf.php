<?php
require_once dirname(__DIR__) . '../../config.php';
require_once ("../../mpdf60/mpdf60/mpdf.php");
$db = DB;
$dbhost = DB_HOST;
$dbuser = DB_USER;
$dbpass = DB_PASS;

$cn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
//エンコードを指定
mysqli_set_charset($cn,'utf8');


$id = $_REQUEST['id'];

$result = mysqli_query($cn,"SELECT title,content FROM m_news where id = '$id'");

$row = mysqli_fetch_assoc($result);



mysqli_close($cn);



$mpdf = new MPDF('ja','A4');//mPDFライブラリで作成するPDFファイルの設定を指定する

$mpdf->WriteHTML('<h1>'.$row['title'].'</h1>');//mPDFライブラリでHTMLとCSSの内容をそのままPDF出力する
$mpdf->WriteHTML($row['content']);//mPDFライブラリでHTMLとCSSの内容をそのままPDF出力する
//$mpdf->SetWatermarkText('極秘');//極秘という文字のウォータマークを出力する。




//$mpdf->WriteHTML(file_get_contents('http://localhost/HAL/wp41koukihyoukakadai/pdfdata.php'));//別のプロジェクトのファイルを読みだしている

ob_end_clean();//出力用バッファをクリアし、出力のバッファリングをオフにする

$mpdf->Output('index.pdf','D');//PDFドキュメントをブラウザでダウンロードして表示する