<?php
/**
 * 字符串常用函数
 */
 
//字符串长度函数:strlen()  mb_strlen()
$str1 = 'hello';
echo strlen($str1),'<br/>';
$str2 = '中国';
echo strlen($str2),'<br/>';
echo mb_strlen($str2,'utf-8'),'<br/>';

//查找字符串位置函数 strpos
$str = 'abcde';
$char = 'c';
if(strpos($str,$char) !== false)
{
	echo '含有'.$char.'<br/>';
}else{
	echo '不含有'.$char.'<br/>';
}

//替换字符串
$str = 'hi,fuck';
echo str_replace('funck','f**k',$str),'<br/>';

//批量替换字符串
$str1 = 'boy,girl,baby,darling';
echo strtr($str1,array('boy'=>'girl','girl'=>'boy')),'<br/>';

//截取子字符串函数
$str = 'Everyday is a gift.';
echo substr($str,0,4),'<br/>';
echo substr($str,0),'<br/>';
echo substr($str,3,-3),'<br/>';

//拆分字符串
$str = 'tech,linux,mysql';
$arr = explode(',',$str);
print_r($arr);
echo '<br/>';
//连接字符串
echo implode($arr, ',');


?>