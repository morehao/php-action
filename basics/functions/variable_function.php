<?php

/*
 * 可变函数
 * 如果一个变量名后有括号，PHP将寻找与变量的值同名的函数，丙炔查实执行它。
 * 可变函数可以用来实现包括动态回调函数的一些场景
 * */

function foo() {
    echo "foo()" . "\n";
}

function bar($arg) {
    echo "bar($arg)" . "\n";
}

function echoit($string) {
    echo $string . "\n";
}

$func = "foo";
$func(); // 调用foo()

$func = "bar";
bar("test"); // 调用bar()

$func = "echoit";
echoit("test"); // 调用echoit()
