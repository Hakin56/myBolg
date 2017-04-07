<?php
require 'function.php';

$curpage = $_GET['p'];
$type = $_GET['type'];
$total = nget("select id from article where type=$type");
$theme_page = 5;
$pagenum = ceil($total/$theme_page);
$count = ($curpage-1)*$theme_page;
$sql = "select id,title,type,date,keyword,description from article where type=$type limit $count,$theme_page ";
$re = xget($sql);

echo json_encode($re);

?>
