<?php
/*
 * 变量相关练习
 */

$x=5; // 全局作用域
$y=6;
$z=$x+$y;
echo "$z\n";

function myTest() {
    global $x;
    $a = 1; // 局部作用域
    static $b=0;
    echo $b++;
    echo "函数内部的作用域\n";
    echo "a：$a\n";
    echo "global x: $x\n";
    echo "GLOBALS x: {$GLOBALS['x']}\n";
    echo "static b: $b\n";
}

myTest();
myTest();
myTest();
