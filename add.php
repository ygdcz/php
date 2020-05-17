<?php
include './mysqli.php';
include 'header.inc.php';
header('Content-type:text/html;charset=utf-8');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $username = array_key_exists('username',$_POST) ? trim($_POST['username']) : null;
 $password = array_key_exists('password',$_POST) ? trim($_POST['password']) : null;
 $repassword = array_key_exists('repassword',$_POST) ? trim($_POST['repassword']) : null;
 if (empty($username) || empty($password))
 {echo "<script>alert('用户名和密码不能为空！');location.href='form.php';</script>";}
 else {
 $username = trim($_POST['username']);
 $password = $_POST['password'];
 }
 if (empty($repassword)){
 echo "<script>alert('确认密码不能为空！');location.href='form.php';</script>";
 }else{
 $repassword = $_POST['repassword'];
 }
 if ($password != $repassword) {
 echo "<script>alert('两次输入密码不一致！');location.href='form.php';</script>";
 }
}
$mysqli = new mysqli('localhost', 'root', 'root', 'php');
$result = $mysqli->query("SELECT password from user where username = "."'$username'");
$rs=$result->fetch_row();
if(!empty($rs)){
 echo "<script>alert('用户已存在！');location.href='form.php';</script>";
}else {
 $mysqli = new mysqli('localhost', 'root', 'root', 'php');
 $sql = "INSERT INTO user (username,password) VALUES ('$_POST[username]', '$_POST[password]')";
 $rs = $mysqli->query($sql);
 if (!$rs) {
 echo "<script>alert('注册失败！');location.href='form.php';</script>";
 } else {
 echo "<script>alert('注册成功！返回登录页面');location.href='login.php';</script>";
 }
}
?>