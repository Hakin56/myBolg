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
			<h1>删除内容</h1><br/><br/><br/>
			<?php
				$sql = "select * from article";
				$re = xget($sql);
				$number = count($re)-1;
				for($a = $number;$a>-1;$a--){ ?>
	        		<div class="run">
						<a href="../article.php?id=<?php echo $re[$a]['id']; ?>"><?php echo $re[$a]['title']; ?></a>
		    			<a href="delete.php?id=<?php echo $re[$a]['id']; ?>" style="float:right"><?php echo '删除文章《'.$re[$a]['title'].'》'; ?></a>
	    			</div>
			<?php } ?>
		</div>
	</body>
</html>
<?php }else{
	require "../404.php";
} ?>
