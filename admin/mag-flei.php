<?php
require "../server/function.php";
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
			<h1>管理分类</h1><br/><br/><br/>
			<?php
				$sql = "select * from type";
				$re = xget($sql);
				$number = count($re)-1;
				for($a = $number;$a>-1;$a--){ ?>
	        		<div class="run">
						<a><?php echo $re[$a]['typename']; ?></a>
		    			<a href="del-flei.php?typeid=<?php echo $re[$a]['typeid']; ?>" style="float:right">删除</a>
	    			</div>
			<?php } ?>
		</div>
	</body>
</html>
<?php }else{
	require "../404.php";
} ?>
