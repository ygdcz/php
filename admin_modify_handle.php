<?php 
	require_once('mysqli.php');
	$id = $_POST['id'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$dateline =  time();
	$sql = "update article set title='$title',author='$author',description='$description',content='$content',dateline=$dateline where id=$id";
	if($mysqli->query($sql)){
		echo "<script>alert('修改文章成功');window.location.href='admin_manage.php';</script>";
	}else{
		echo "<script>alert('修改文章失败');window.location.href='admin_manage.php';</script>";
	}
?>