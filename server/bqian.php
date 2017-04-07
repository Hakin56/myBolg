<?php
require 'function.php';

$curpage = $_GET['p'];
$keyword = $_GET['keyword'];
$total = nget("select id from article where keyword like '%".$keyword."%'");
$theme_page = 5;
$pagenum = ceil($total/$theme_page);
$count = ($curpage-1)*$theme_page;
$sql = "select id,title,type,date,keyword,description from article where keyword like '%".$keyword."%' limit $count,$theme_page";
$re = xget($sql);

echo json_encode($re);

?>
