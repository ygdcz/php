<?php
require_once("./paging.php");
//根据传递过来的id值，获取详情页内容，存于数组$data中
$id=$_GET['id'];
$SQL="SELECT * FROM article WHERE id=$id";
$info=$mysqli->query($SQL);
if($info&&mysqli_num_rows($info)){
	while($row=mysqli_fetch_assoc($info)){
		$data[]=$row;
		
	}
}else{
	$data=array();
	
}
//取最新添加的6条编号、标题信息，存于数组$data_title
if($info_title&&mysqli_num_rows($info_title)){
	while($row_title=mysqli_fetch_assoc($info_title)){
		$data_title[]=$row_title;
	}
}else{
	$data_title=array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 <meta name="format-detection" content="telephone=no" />
 <title>新闻内容</title>
 <style>
 body{
 background-color: #F0F0F0;
 }
 a{
	 font-size: larger;
 }
 *{
 border: 0px;
 padding: 0px;
 margin: 0px;
 font-size: 14px;
 }
 a:hover{color:red;text-decoration:none;}
 
 .color{
 color: #323333;
 }
 #blog{
 width: 1000px;
 overflow: hidden;
 margin: 0 auto;
 margin-top: 20px;
 }
 #blog ul{
 list-style-type: none;
 }
 #blog ul li{
 background-color: white;
 padding: 20px;
 width: 100%;
 overflow: hidden;
 margin-top: 15px;
 }
 .blog-left{
 float: left;
 width: 680px;
 overflow: hidden;
 }
 .blog-right{
 float: left;
 margin-left: 10px;
 width: 280px;
 overflow: hidden;
 }
 .blog-right img{
 width: 280px;
 height: 200px;
 }
 .title{
 text-decoration:none;
 font-size: 26px;
 }
 .blog-left p{
 color: gray;
 }
 .blog-left img{
 width: 20px;
 margin-right: 10px;
 vertical-align: middle;
 }
 .mi{
 padding-left: 90px;
 }
 #blog-content{
 width: 940px;
 overflow: hidden;
 padding: 30px;
 background-color: white;
 margin: 0 auto;
 border-top: 2px solid #e2b709;
 margin-top: 30px;
 }
 .siztitle{
 font-size: 28px;
 text-align: center;

 }
 #blog-content p{
 color: black;
 }
 #blog-content img{
 width: 20px;
 margin-right: 10px;
 vertical-align: middle;
 }
.rev{
 border-left: 2px solid #e2b709;
 width: 100%;
 overflow: hidden;

 margin-top: 20px;
 padding-left: 10px;

 }
 .content{
 margin-top: 20px;
 line-height: 28px;
 }
 .pl-p{
 width: 1000px;
 overflow: hidden;
 margin: 0 auto;
 margin-top: 20px;
 font-size: 20px;
 padding-left: 20px;
 }
 #pl-div{
 width: 920px;
 padding: 40px;
 background-color: white;
 overflow: hidden;
 margin: 0 auto;
 margin-top: 30px;
 }
 #pl-left{
 float: left;
 width: 100px;
 overflow: hidden;
 text-align: center;
 }
 #pl-right{
 float: left;
 margin-left: 30px;
 width: 700px;
 overflow: hidden;
 }
 .pl-txt{
 border: 1px solid #777777;padding: 20px
 }
 .pl-input1{
 border: 1px solid #777777;width: 150px;height:30px;margin-top: 30px
 ;
 }
 .pl-input2{
 background-color: #65b5ff;color: white;width: 110px;height: 40px;margin-left: 580px}
 </style>
</head>
<body>


<a href="mid.php">返回</a>
<div id="blog-content">
	<?php
	//将$data中的数据通过foreach循环出来，显示在相应div里面
		if(!empty($data)){
			foreach($data as $value){
	?>
 <p class="siztitle"><?php echo $value['title']?></p>
 <p style="margin-top: 50px;color: gray" >作者:<?php echo $value['author']?>		发表于<?php echo date("Y-m-d",$value['dateline'])?></p>
 <p class="rev"style="color:gray;">简介 <?php echo $value['description']?></p>
 <p class="content"><?php echo $value['content']?></p>
 <?php
 	}
 }
 ?>
</div>
<?php 
include 'pinlun.php';?>
</body>
</html>