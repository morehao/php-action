<?php
$arr1 = array(
    "foo" => "bar",
    "bar" => "foo",
);

// 使用短数组语法
$arr2 = [
    "foo" => "bar",
    "bar" => "foo",
];

// 没有键名的索引数组
$arr3 = array(1, 2, 3);

var_dump($arr1);
var_dump($arr2);
var_dump($arr3);
