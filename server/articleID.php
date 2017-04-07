<?php
	require 'function.php';

	$ID = $_GET['id'];
	$sql = "select id,title,content,type,date,keyword from article where id=$ID";

	$res = xget($sql);

	echo json_encode($res);

 ?>
