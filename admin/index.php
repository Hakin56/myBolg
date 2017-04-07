<?php require "../server/function.php";
if(islogin()){
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
		<title>登陆</title>
		<link rel="stylesheet" href="css/houtai.css">
	</head>
	<body>
		<header>
			<div class="div-zuo">
				<span>你好！东哥</span>
				<img src="images/my-self.png">
			</div>
			<div class="div-you">
				<a href="logout.php">退出登录</a>
			</div>
		</header>
		<div class="main-area">
			<div class="blog-info">
				<h2>博客信息</h2>
				<div class="blog-aarr">
					<span>名称：<?php echo BLOG_name;?></span><br/>
			        <span>描述：<?php echo BLOG_description; ?></span><br/>
			        <span>主页地址：<?php echo BLOG_url;?></span><br/>
			        <span>博主：<?php echo BLOG_user;?></span><br/>
				</div>
			</div>
			<div class="blog-nav">
				<h2>导航栏</h2>
				<div class="blog-aarr">
					<a href="http://<?php echo BLOG_url;?>">查看博客</a><br/>
				    <a href="post-new.php">发布文章</a><br/>
				    <a href="list.php">文章管理</a><br/>
					<a href="mag-flei.php">分类管理</a>
					<a href="mag-bqian.php" class="unnormal">标签管理</a>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }else{
	session_start();?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
			<title>登陆</title>
			<link rel="stylesheet" href="css/houtai.css">
		</head>
		<body>
			<img class="tian" src="images/haha.jpg">
			<div class="container">
				<div class="image-1">
					<img src="images/my-self.png">
				</div>
				<form  action="login.php" method="post">
					<input type="text" name="name" size="20" placeholder="用户名"><br>
					<input type="password" name="password" size="20" placeholder="密码"><br>
					<button type="submit" name="submit">登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;陆</button>
				</form>
			</div>
		</body>
	</html>
<?php
} ?>
