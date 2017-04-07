<?php
	require 'function.php';

	$sql2 = "select * from tags";
	$shuju2 = xget($sql2);
	$bqian = array();
	for ($i=0; $i < count($shuju2); $i++) {
		$bqian[$shuju2[$i]['tagid']] = $shuju2[$i]['tagname'];
	}

	echo "[" . json_encode($bqian) . "]";
 ?>
