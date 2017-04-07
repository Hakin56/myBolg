<?php
	require 'function.php';

	$keyword = $_GET['keyword'];
	$sql = "select id from article where keyword like '%".$keyword."%'";
	$total = nget($sql);

	echo $total;
 ?>
