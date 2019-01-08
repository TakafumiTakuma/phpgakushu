<?php
//session_start();
//$prof = array(
//    'name' =>'',
//    'loginid' =>'',
//    'pass' =>'',
//    'mail' =>'',
//);
//
//$err_msg = array(
//    'name' =>'',
//    'loginid' =>'',
//    'pass' =>'',
//    'mail' =>'',
//);
//
//
//
//if(!empty($_POST)){
//    foreach($prof as $key => $value){
//        $prof[$key] = $_POST[$key];
//    }
//    if($prof['name'] == ''){
//        $err_msg['name'] = '氏名が入力されていません';
//
//    }
//    if($prof['loginid'] == ''){
//        $err_msg['loginid'] = 'ログインIDが入力されていません';
//
//    }
//    if($prof['pass'] == ''){
//        $err_msg['pass'] = 'パスワードが入力されていません';
//
//    }
//    if($prof['mail'] == ''){
//        $err_msg['mail'] = 'メールアドレスが入力されていません';
//
//    }elseif(strpos($prof['mail'],'@') === false){
//        $err_msg['mail'] ='正しいメールの形式で入力してください';
//
//    }
//
//    if(count($err_msg) == 0){
//        $_SESSION['prof'] = $prof;
//         header('./location:confirm.php');
//        exit();
//
//    }
//}
//require_once ("tpl/entry.php");