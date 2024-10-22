<?php
/*
 * 数组运算符
 * + 运算符把右边的数组元素附加到左边的数组后面，两个数组中都有的键名，则只用左边数组中的，右边的被忽略。
 * */
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // $a 和 $b 的并集
echo "Union of \$a and \$b: \n";
var_dump($c);
