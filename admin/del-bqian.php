<?php
require "../server/function.php";
if(islogin()){
	if(isset($_GET['tagid'])){
		$tagid = $_GET['tagid'];
		$sql = "delete from tags where tagid = $tagid";
		$post = xget($sql);
		text('删除成功','80%', '删除成功','',1,'返回后台',0);
	}else{
		text('错误','80%', '错误','该文件不能直接访问',1,'返回后台',0);
	}
}
