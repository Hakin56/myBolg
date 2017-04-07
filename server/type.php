<?php
require 'function.php';
#标签
	$sql1 = "select * from type";
	$shuju1 = xget($sql1);
	$flei = array();
	for ($i=0; $i < count($shuju1); $i++) {
		$flei[$shuju1[$i]['typeid']] = $shuju1[$i]['typename'];
	}
	echo "[" . json_encode($flei) . "]";
 ?>
