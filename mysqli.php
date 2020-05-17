<?php
header("Content-type: text/html; charset=utf-8");
include 'conn.inc.php';
$mysqli=new mysqli(HOST,USER,PWD,DBNAME1);
if($mysqli->connect_errno){
    die('数据库链接出错'.$mysqli->connect_error);
}
$mysqli=new mysqli(HOST,USER,PWD,DBNAME2);
if($mysqli->connect_errno){
    die('数据库链接出错'.$mysqli->connect_error);
}
$mysqli=new mysqli(HOST,USER,PWD,DBNAME3);
if($mysqli->connect_errno){
    die('数据库链接出错'.$mysqli->connect_error);
}
?>