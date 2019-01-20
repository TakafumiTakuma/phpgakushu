<?php
/**
 * Created by PhpStorm.
 * User: takumatakafumi
 * Date: 2019-01-20
 * Time: 01:01
 */
//多次元配列のソート
$array = array(
    array(
        'id' => 0,
        'track_num' => 7,
        'title' => 'ベィスドロップ・フリークス',
        'artist' => 'かめりあ feat. ななひら'
    ),
    array(
        'id' => 1,
        'track_num' => 1,
        'title' => 'CHRONO DIVER -NORNIR-',
        'artist' => 'L.E.D'
    ),
    array(
        'id' => 2,
        'track_num' => 7,
        'title' => '表裏一体',
        'artist' => 'ぷらぷら'
    ),


);

foreach ((array) $array as $key => $value){
    $sort[$key] = $value['id'];
}

array_multisort($sort, SORT_ASC, $array);

var_dump($array);



