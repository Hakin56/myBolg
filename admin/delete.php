﻿<?php
require "../server/function.php";
if(islogin()){
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "delete from article where id = $id";
		$post = xget($sql);
		text('删除成功','80%', '删除成功','',1,'返回后台',0);
	}else{
		text('错误','80%', '错误','该文件不能直接访问',1,'返回后台',0);
	}
}else{
	require "../404.php";
}
