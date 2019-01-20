<?php
/**
 * Created by PhpStorm.
 * User: takumatakafumi
 * Date: 2019-01-19
 * Time: 00:01
 */

function check_str($check_str){
    $str = '';
    if(strlen($check_str) > 10){
        $str = "文字数がオーバーしています";
    }
    return $str;
}


function check_empty($check_emp){
    $emp = '';
    if(empty($check_emp)){
        $emp = '未入力です';
    }
    return $emp;
}

function check_number($check_number){
    $number = '';
    if(preg_match("/[^0-9]/",$check_number)){
        $number = '数値以外が入力されています';
    }
    return $number;
}