<?php
/**
 * 数组
 */
$arr = array('a','b','c');
print_r($arr);
echo '<br/>';

$arr1 = array();
$arr1['a'] = 1;;
print_r($arr1);
echo '<br/>';

//循环数组
echo '<br/>';
echo'foreach():','<br/>';
$arr = array('name'=>'mango','age'=>'28','sex'=>'male');
foreach ($arr as $key => $value) {
	echo $key,':',$value,'<br/>';
}
//简化写法
echo '<br/>';
echo'简化写法 foreach():','<br/>';
foreach ($arr as $v) {
	echo $v,'<br/>';
}

echo '<br/>';
echo'把下面数组的每个单元值变为原来的2倍:','<br/>';
$arr = array(1,2,3,4,5,6,7,8,9,10);
foreach ($arr as $key => $value) {
	$arr[$key] = $value*2;
}
print_r($arr);
echo '<br/>';

/**
 * 游标操作
 * current()
 * prev()
 * next()
 * end()
 * reset()
 */
echo '<br/>';
echo '游标操作：','<br/>';
//取当前游标指向的数组单元的值
$a = array('a','b','c');
echo current($a),'<br/>';

next($a);//把数组的游标向后移
echo current($a),'<br/>';

prev($a);//把数组游标前移
echo current($a),'<br/>';

end($a);//把数组游标移到最后
echo current($a),'<br/>';

reset($a);//把数组游标复位
echo current($a),'<br/>';

echo 'while:';
while ($v = current($a)) {
	echo $v,'<br/>';
	next($a);
}

/**
 * 数组常用函数
 */
echo '<br/>';
echo '数组常用函数：','<br/>';
$arr = array('a'=>'张龙','b'=>'赵虎','c'=>NULL);
if(isset($arr['a'])){
	echo 'a存在';
}else{
	echo 'a不存在';
}
echo '<br/>';
//array_key_exists()
if(array_key_exists('c', $arr)){
	echo 'c存在';
}else{
	echo 'c不存在';
}
echo '<br/>';
//in_array()
if(in_array('赵虎', $arr)){
	echo '赵虎存在';
}else{
	echo '赵虎不存在';
}
echo '<br/>';
echo '<br/>';
$arr = array('a','b','c','d');
echo array_push($arr,'e'),'<br/>';
echo array_pop($arr),'<br/>';
echo array_pop($arr),'<br/>';
echo array_unshift($arr,'z'),'<br/>';
echo array_shift($arr),'<br/>';
?>