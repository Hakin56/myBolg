<?php
require 'set.php';

function fbqian($keyword ,$bqian){
	$shuzu = explode(',', $keyword);
	foreach ($shuzu as $key => $value) {?>
		 <a class="<?php echo "cl".$value; ?>" href="bqian.php?keyword=<?php echo $value; ?>"><?php echo "#" . $bqian[$value];?></a>&nbsp;<?php
	}
}

#从数据库获取数据
function xget($sql){
	$db = mysqli_connect(SQL_host,SQL_user,SQL_password,SQL_name);
	$charset = 'set names utf8';
	mysqli_query($db,$charset);
	$re = mysqli_query($db,$sql);
	// return $re;
	$num = mysqli_num_rows($re);
	$arr = array();
	for ($a = 0; $a < $num; $a++){
		$arr[]= mysqli_fetch_assoc($re);
	}
	return $arr;
}

#获取数据个数
function nget($sql){
	$db = mysqli_connect(SQL_host,SQL_user,SQL_password,SQL_name);
	// $charset = 'set names utf8';
	// mysqli_query($db,$charset);
	$re = mysqli_query($db,$sql);
	$num = mysqli_num_rows($re);
	return $num;
}

#从数据库中插入、删除、修改数据
function xq($sql){
	$db = mysqli_connect(SQL_host,SQL_user,SQL_password,SQL_name);
	$charset = 'set names utf8';
	mysqli_query($db,$charset);
	$re = mysqli_query($db,$sql);
	return $re;
}

#登录
function login(){
	$name = htmlspecialchars($_POST["name"]);
	$pw = sha1(htmlspecialchars($_POST["password"])); #虽然不存在数据库读取，但是还是这样吧...
	if($name.$pw == BLOG_user.BLOG_password){
		text('登录成功','70%', '登录成功','',1,'查看后台',0);
		setcookie("user", $name, time()+3600);
		setcookie("password", $pw, time()+3600);
		return TRUE;
	}else{
		text('用户名或密码错误','70%', '用户名或密码错误','请核对后重新输入',1,'重试',0);
		return FALSE;
		#setcookie("user", $name, time()+3600);
		#setcookie("password", $name, time()+3600);
	}
}

#判断是否登录,结果返回布尔
function islogin(){
	if (isset($_COOKIE["user"])){
		$name=$_COOKIE["user"];
	}
	if (isset($_COOKIE["password"])){
		$pw=$_COOKIE["password"];
	}
	if($name.$pw == BLOG_user.BLOG_password){
		return TRUE;
	}else{
		return FALSE;
	}
}

#退出登录
function logout(){
	setcookie("user", "", time()-1);
	setcookie("password", "", time()-1);
	return TRUE;
}

#列出分类名称和地址
function listclassify(){
	$sql = 'select * from classify';
	$classify = xget($sql);
	$num = count($classify);
	for($a = 0; $a < $num; $a++){ ?>
		<a href="classify.php?c=<?php echo $a+1 ?>"><?php echo $classify[$a]['name'] ?> </a>
	<?php
	}
}
#显示访问量
function disNum() {
	$newnum=file_get_contents("count.txt");
	echo $newnum;
}
#提示
function text($title='提示',$width='80%', $h1='提示',$content='',$index=1,$admin='查看后台',$list=0){ ?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
			<title><?php echo $title; ?></title>
			<style>
			#container{
				width:<?php echo $width; ?>;
				margin-top:120px;
				margin: auto;
				margin-bottom:70px;
				background:#F1F2F3;
				border-radius:10px;
				-webkit-border-radius:10px;
				-moz-box-shadow:2px 2px 15px #333333;
				-webkit-box-shadow:2px 2px 15px #333333;
				box-shadow:2px 2px 15px #333333;
			}
			.main a{
				display: block;
				width: 180px;
				height: 42px;
				background: #dda95d;
				font-size: 20px;
				font-weight: bold;
				color: black;
				text-align: center;
				line-height: 42px;
				text-decoration: none;
				border-radius: 5px;
				margin: 10px auto;
			}
			.main a:hover {
				background: #c7821c;
			}
			.main{
				text-align:center;
				margin-top:20px;
				margin: auto;
				padding-bottom:20px;
			}
			h1{
				padding-top:80px;
				text-align:center
			}
			</style>
		</head>
		<body>
			<div id="container">
			    <h1><?php echo $h1; ?></h1>
			    <div class="main">
			        <?php echo $content; ?><br/><br/>
			    	<?php if($index==1){ ?>
			    	<a href="http://<?php echo BLOG_url;?>">查看首页</a><br/>
					<?php } ?>
			    	<?php if($admin!=FALSE){ ?>
			    	<a href="http://<?php echo BLOG_url;?>/admin"><?php echo $admin;?></a><br/>
					<?php } ?>
			    	<?php if($list==1){ ?>
			    	<a href="http://<?php echo BLOG_url;?>/admin/list.php">文章管理</a><br/>
					<?php } ?>
			    </div>
			</div>
		</body>
		</html>
<?php } ?>
