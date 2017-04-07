<?php
require 'function.php';

if(isset($_GET['p'])){
	$curpage = $_GET['p'];
	if($curpage<1){
		$curpage=1;
	}
}else{
	$curpage = 1;
}
$total = nget("select * from article");
$theme_page = 5;
$pagenum = ceil($total/$theme_page);
$count = ($curpage-1)*$theme_page;
$sql = "select id,title,type,date,keyword,description from article order by id desc limit $count,$theme_page ";
$re = xget($sql);

echo json_encode($re);
