<?php
//引入分页程序
require_once("paging.php");
//取出列表页3条数据，存于数组$data中
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
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<style>
		A:link{COLOR:#3d6ba7;TEXT-DECORATION:none}
		A:visited{COLOR:#3d6ba7;TEXT-DECORATION:none}
		A:hover{COLOR:#3d6ba7;TEXT-DECORATION:underline} 
body{
	background-repeat: no-repeat;
	background-size: cover;
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



 .title{
 text-decoration:none;
 font-size:26px;
 color:white;
 padding-left: 140px;
 }
 .blog-left p{
 color: gray;
 }
 
 .page{
 height: 40px;
 margin-top: 10px;
 text-align: center;
 padding-top: 20px;
 }
 .page a{
 border: 1px solid #71b0bb;
 text-decoration: none;
 margin: 5px;
 padding: 5px 10px;
 }
 .page a:link,.page a:visited{
 color: #000000;
 }
 .page a:hover,.page a:active{
 color: #FFF;
 background-color: #bbac5c;
 }
 .mi{
 padding-left: 90px;

 }
 #blog-content{
 width: 640px;
 overflow: hidden;
 padding: 30px;
 background-color:whitesmoke;
 margin: 0 auto;
 border-top: 2px solid #e2b709;
 margin-top: 30px;
 opacity: 0.5;
 }
.title a{
	 font-size: 26px;
 }
 
 #blog-content p{
 color: black;
 font-size: 20px;

 }
 
#blog-new {
margin-top:100px;
padding:8px;
padding-right: 100px;
 position:fixed;
 top:0;
 left:80%;
 margin-right:20px;
 border:2px solid red;
 font-size:24px;
 height:auto !important;}

#blog-new li{
	opacity: 0.6;
	font-size:20px;	
	background-color: snow;
	opacity: 0.4;
}

 </style>
 
<title>首页</title>
</head>
<body>
	<?php
	include 'navigation.php';
		//将$data中的数据通过foreach循环出来，显示在相应div里面
		if(!empty($data)){
			foreach($data as $value){
	?>
	<div id="blog">
	 <div id="blog-new">
		 最新资讯
		 <ul >
		 <?php 
		 //将$data_title中的数据通过foreach循环出来，显示在相应div里面
		 	if(!empty($data_title)){
		 		foreach($data_title as $value_title){
		 ?>
		 	<li><a href="detail.php?id=<?php echo $value_title['id']?>"><?php echo $value_title['title']?></a></li>
		 <?php 
		 	}
		 }
		 ?>
		 </ul>
	 </div>
	 <p class="title"><a href="detail.php?id=<?php echo $value['id']?>"><?php echo $value['title']?></a></p>
	 <p style="padding-bottom: 10px;"></p>
	 <div id="blog-content"><p style="margin-top: 20px" ><?php echo $value['description']?></p>
	
	 </div>
	 
	 </div> 
	 
	 
		
	 
	 <?php
	 	}
	 }
	 //初始化首页、上一页、下一页、末页的值，通过<a>标签进行跳转到当前页面，传入$page的值
	 	$first=1;
	 	$prev=$page-1;
	 	$next=$page+1;
	 	$last=$pagenum;
	 ?>
	 </div>
	<div class="page">
			   <a href="mid.php?page=<?php echo $first ?>">首页</a>
			   <a href="mid.php?page=<?php echo $prev ?>">上一页</a>
			   <a href="mid.php?page=<?php echo $next ?>">下一页</a>
			   <a href="mid.php?page=<?php echo $last ?>">末页</a>
	</div>
	<script type="text/javascript">
			window.onload = function() {
				var config = {
					vx : 4,
					vy : 4,
					height : 2,
					width : 2,
					count : 100,
					color : "121, 162, 185",
					stroke : "100, 200, 180",
					dist : 6000,
					e_dist : 20000,
					max_conn : 10
				}
				CanvasParticle(config);
			}
		</script>
		<script type="text/javascript" src="js/canvas-particle.js"></script>
		<?php
		include 'bottom.php';
		?>
</body>
</html>