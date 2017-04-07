<?php
	require 'function.php';

	$sql = "select id from article";
	$total = nget($sql);

	echo $total;
 ?>
