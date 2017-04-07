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
	<script charset="utf-8" src="editor/kindeditor.js"></script>
	<script charset="utf-8" src="editor/lang/zh_CN.js"></script>
	<script>
	        KindEditor.ready(function(K) {
	                window.editor = K.create('#editor_id');
	        });
			var options = {
	        cssPath : '/css/index.css',
	        filterMode : true
	};
	var editor = K.create('textarea[name="content"]', options);
	</script>
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
			<div class="write-wen">
				<h2>写文章</h2>
				<form class="" action="update-post.php" method="post">
					<input type="text" name="name" placeholder="文章标题"><br>
					<textarea name="content" id="editor_id"  placeholder="文章内容" rows="25"></textarea><br>
					<select class="type-sel" name="type">
						<?php
							for ($i=1; $i <= count($flei); $i++) { ?>
								<option value="$i"><?php echo $flei[$i]; ?></option>
							<?php }
						 ?>
					</select><br>
					<div class="check-box">
						<input type="text" name="keyword" placeholder="keyword">
					</div>
					<button type="submit" name="submit">发布文章</button>
				</form>
			</div>
		</div>
	</body>
</html>
<?php }else{
	require "../404.php";
}
