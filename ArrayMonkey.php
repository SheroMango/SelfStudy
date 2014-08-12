<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>猴子选大王</title>
</head>
<?php
function num($num1, $num2){
	for ($i=1; $i <= $num1; $i++) { 
		$num[] = $i;
	}
	do{
		$unset = 0;
		if ($num2 > count($num)) {
			$unset = $num2%count($num);
			//如果if判断语句里面为数字的话 为零是F 不为零是T
			if ($unset) {
				unset($num[$unset-1]);
			}else{
				array_pop($num);
			}
			
		}else{
			unset($num[$num2-1]);
		}
		sort($num);
	}while(count($num) !== 1);
	return $num[0];
}

if (isset($_POST['num1']) && isset($_POST['num2'])) {
	$num1 = $_POST['num1']; //猴子的数量
	$num2 = $_POST['num2']; //数数的数量
	print_r(num($num1, $num2));
	exit;
}
?>

<body>
<form action="ArrayMonkey.php" method="post">
猴子的数量：<input type="text" name="num1" /><br/>
要数的数量：<input type="text" name="num2" /><br/>
<input type="submit" value="提交" />
</form>
</body>
</html>