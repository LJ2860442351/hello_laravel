<?php
/**
 * Created by PhpStorm.
 * User: liujian
 * Date: 2018/8/26
 * Time: 下午8:19
 */

$arr=array(
    [
        "name"=>'liujian',
        "age"=>'21',
    ],
    [
        "name"=>'jianliu',
        "age"=>'23',
    ],
);
$new_arr=array(
    'name'=>"liujian",
    'age'=>'21',
    'class'=>"computer",
    'SCHOOL'=>"jdz",
);
//var_dump($new_arr);
//var_dump($arr);
print_r(array_change_key_case($new_arr,CASE_LOWER));//小写
print_r(array_search('jdz',$new_arr));//输出要找的值的键名
$days=cal_days_in_month(CAL_DOW_DAYNO,2,2019);
echo '<br/>'."2019 年 2 月 有".$days."天";

echo date("l")."<br>";
echo date('l jS \of F Y h: i: s: A');


//error_reporting(0);
//获取当前目录的函数
echo "<br>".getcwd()."<br>";

chdir("liujian");//修改当前目录

echo getcwd();//输出


echo "<br>".$_SERVER['PHP_SELF']."<br>";
echo "<br>".$_SERVER['HTTP_HOST']."<br>";
echo "<br>".$_SERVER['SERVER_NAME']."<br>";//主机名字

$cars = array
(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);


for($row=0;$row<count($cars);$row++){
    echo "行数：" .$row;
    for($li=0;$li<3;$li++){
        echo "<li>".$cars[$row][$li]."</li>"."</ul>";
    }
}
date_default_timezone_set("Asia/shanghai");
echo date("h:i:sa");


$d1=strtotime("December 31");
$d2=ceil(($d1-time())/60/60/24);
echo '<br>'."距离十二月三十一日还有：" . $d2 ." 天。".'<br>';

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";
//
//$file=fopen("text.txt","r")or die("读取文件失败");
//echo fread($file,filesize("text.txt"));
//fileclose($file);

$my_flies=fopen("my_test.txt","w")or die("创建文件失败");
if(file_exists("my_test.txt")){
    echo "files is exist";
}else{
    echo "please create this file";
}