<?php
/**
 * cross road
 */

//
header("Content-type: text/html; charset=utf-8");
for ($i=100000,$cnt=0; $i>=5000 ; ) { 
	$cnt += 1;

	//根据现有钱数进行扣钱
	if ($i > 50000) {
		$i *= 0.95;
	}else{
		$i -= 5000;
	}

	echo "第",$cnt,"次过路口，剩下",$i,"元<br/>";
}

?>