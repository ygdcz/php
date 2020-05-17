<?php
			 include './mysqli.php';
			 include 'header.inc.php';
			 header('Content-type:text/html;charset=utf-8');
			 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			  if (empty($_POST['username'])){
			  echo "<script>alert('用户名不能为空！');location.href='login.php';</script>";
			  }else {
			  $username=trim($_POST['username']);
			  }
			  if (empty($_POST['password'])){
			  echo "<script>alert('密码不能为空！');location.href='login.php';</script>";
			  }else{
			  $password=$_POST['password'];
			  }
			 }
			 $mysqli = new mysqli('localhost', 'root', 'root', 'php');
			 $result = $mysqli->query("SELECT password FROM user WHERE username = "."'$username'");
			 $rs=$result->fetch_row();
			 if (!empty($rs)){
			  if ($password != $rs[0]) {
			  echo "<script>alert('密码错误！');location.href='login.php';</script>";
			  }else{
			  $expire=3600;
			  ini_set('session.gc_maxlifetime', $expire);//保存1小时
			  if (empty($_COOKIE['PHPSESSID'])) {
			  session_set_cookie_params($expire);
			  session_start();
			  }else{
			  session_start();
			  setcookie('PHPSESSID', session_id(), time() + $expire);
			  }
			 
			  if(isset($_SESSION['username'])){
			  echo "您已经登入了，请不要重新登入！用户名：{$_SESSION['username']}---<a href='mid.php'>进入主页</a>";
			   header("refresh:3;url=mid.php"); 
			  }else{
			  $_SESSION['username']=$_POST['username'];
			  }
			  echo "<script>alert('登录成功！');</script><br>";
			  echo "您好！{$_SESSION['username']},";
			  header("refresh:3;url=mid.php"); print('正在加载，请稍等...<br>3秒后自动跳转。'); 
			  }
			 }
			 else{
			  echo "<script>alert('没有此用户！');location.href='login.php';</script>";
			 }
?>