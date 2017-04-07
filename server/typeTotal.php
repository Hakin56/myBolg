<?php
	require 'function.php';

	$type = $_GET['type'];
	$sql = "select id from article where type=$type";
	$total = nget($sql);

	echo $total;
 ?>
