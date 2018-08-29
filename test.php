<?php
/**
 * Created by PhpStorm.
 * User: liujian
 * Date: 2018/8/26
 * Time: 下午5:16
 */
//  http://qiniu.blaugrana.cn/DQD/team_logo/ba482355a9ff83cf    实现效果
$arr = [
    [
        'home_logo'=>'DQD/team_logo/ba482355a9ff83cf',
        'away_logo'=>'DQD/team_logo/eea36afb1e95d0c5'
    ],
    [
        'home_logo'=>'DQD/team_logo/eea36afb1e95d0c5',
        'away_logo'=>'DQD/team_logo/cbc27253a369b47c'
    ],
    [
        'home_logo'=>'DQD/team_logo/905800e31dc2a007',
        'away_logo'=>'DQD/team_logo/eea36afb1e95d0c5'
    ]
];
//方法1
foreach ($arr as &$value){ //取地址的方法
    $value['home_logo'] = 'http://qiniu.blaugrana.cn/'.$value['home_logo'];
    $value['away_logo'] = 'http://qiniu.blaugrana.cn/'.$value['away_logo'];
}
var_dump($arr);
//方法2
foreach ($arr as $i=>$value){ //键值对对方法
    $arr[$i]['home_logo']=''.$value['home_logo'];
    $arr[$i]['away_logo']=''.$value['away_logo'];
}
//foreach($arr as $i=>$value){
//    $arr[$i][$value]=str_replace($value['home_logo'],'DQD/team_logo/');
//}
var_dump($arr);





$new_array=array(
    "ABCD"=>'liujian',
    "abcd"=>"LIUJIAN",
);
var_dump(array_change_key_case($new_array,CASE_LOWER));//下标小写
var_dump(array_change_key_case($new_array,CASE_UPPER));//下标大写
var_dump(array_keys($new_array));//只返回键名，即是下标
var_dump(array_keys($new_array,'liujian'));//只返回相对应的键名

$url=parse_url('http://google.com?serach=190.html/id=123');
var_dump($url);