<?php
/**
 * Created by PhpStorm.
 * User: takumatakafumi
 * Date: 2019-01-19
 * Time: 00:00
 */

require_once "func.php";

$name = $_POST['name'];
$number = $_POST['number'];

$strerror = check_str($name);
$strempty = check_empty($name);
$numempty = check_empty($number);
$strnumber = check_number($number);

echo $strerror.'<br>';
echo $strempty.'<br>';
echo $numempty.'<br>';
echo $strnumber.'<br>';

echo $name.'<br>';
echo $number.'<br>';

//if($strerror){
//    echo $strerror;
//}elseif($strempty) {
//    echo $strempty;
//}elseif($strnumber) {
//    echo $strnumber;
//}elseif($numempty){
//    echo $numempty;
//}else{
//    echo $name;
//    echo $number;
//}





