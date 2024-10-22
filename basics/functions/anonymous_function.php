<?php
/*
 * 匿名函数
 * */
$greet = function ($name) {
    printf("Hello %s\r\n", $name);
};

$greet('World');
$greet('PHP');
