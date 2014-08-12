<?php
//一种羊 第二年生一只小羊 第四年生一只小羊 第五年死去 问：20年后有多少只羊？

$sheep = array(1,0,0,0,0);
for($y = 1;$y<20;$y++){
	$tmp = $sheep[1] + $sheep[3];
	array_unshift($sheep, $tmp);
	array_pop($sheep);
}
echo '二十年后有',array_sum($sheep),'只羊。';
print_r($sheep);
?>