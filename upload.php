<?php
/**
 * Created by PhpStorm.
 * User: liujian
 * Date: 2018/8/27
 * Time: 上午12:54
 */

if (($_FILES['file']['type'] == "image/gif" || $_FILES['file']['type'] == "image/jpeg" || $_FILES['file']['type'] == "image/pjpeg") && $_FILES['file']['size'] < 20000) {
    if ($_FILES['file']['error']>0){
        echo $_FILES['file']['name'];
        echo $_FILES['file']['type'];
    }else{
        echo $_FILES['file']['error'];
    }
}