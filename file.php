<?php
$path = './';
$dh = opendir($path);
if($dh===false){
	echo '打开失败';
	exit;
}
$list = array();
while(($item = readdir($dh))!== false){
	$list[] = $item;
}
echo '<br/>';
print_r($list);exit;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<style>
		td{
			border:1px solid gray;
		}
	</style>
</head>
<body>
	<h1>文件管理系统</h1>
	<table>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
</body>
</html>