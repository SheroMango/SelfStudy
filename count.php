<?php
/**
 * 九九乘法表
 */

for ($i=1; $i <= 9 ; $i++) { 
	for ($j=1; $j <= $i; $j++) { 
		echo $i,"*",$j,"=",$i*$j,"&nbsp";
	}
	echo "<br/>";
}

?>