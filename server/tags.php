<?php
	require 'function.php';

	$sql = "select id,title,date from article";

	$data = xget($sql);

	echo json_encode($data);

 ?>
