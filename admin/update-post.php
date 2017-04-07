<?php require "../server/function.php";
if(islogin()){
	if($_POST['content']==FALSE or $_POST['name']==FALSE){
		text('错误','80%', '错误','该文件不能直接访问<br/>标题和内容不能为空',1,'返回后台',0);
	}else{
	$name = $_POST['name'];
	$content = $_POST['content'];
	$type = $_POST['type'];
	$keyword = $_POST['keyword'];

	$sql = "INSERT INTO article(id, title, content, type, date, keyword) VALUES (NULL , '$name', '$content', '1', CURRENT_TIMESTAMP, '$keyword');";
	$a=xq($sql);
	if($a==TRUE){
    	text('发布成功','80%', '发布成功','',1,'返回后台',0);
	}else{
		text('发布失败','80%', '发布失败','请检查set.php中数据库连接信息，然后重新登录再发布',1,'返回后台',0);
	}
	}
}else{
	require "../404.php";
}
