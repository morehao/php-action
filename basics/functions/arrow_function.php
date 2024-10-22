<?php

$y = 1;
$fn1 = fn($x) => $x + $y;

// 与fn1效果相同
// use 关键字在匿名函数（闭包）的上下文中用于从父作用域继承变量。如果定义必报后修改了$y的值，闭包内使用的$y的值不会改变
$fn2 = function ($x) use ($y) {
    return $x + $y;
};
echo $fn1(3) . "\n";
echo $fn2(3) . "\n";
